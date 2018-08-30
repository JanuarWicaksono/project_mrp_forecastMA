<?php
class Materials_m extends CI_model
{
    public function materialsGet()
    {
        return $this->db->get('materials');
    }

    public function materialGet($where){
        $query = $this->db->get_where('materials', ['material_id' => $where]);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function materialCreate()
    {  
        $this->db->insert('materials', [
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock'),
            'stock_type' => $this->input->post('stock-type'),
            'status' => $this->input->post('status'),
            'note' => $this->input->post('note'),
            'created_at' => date('Y-m-d H:i:s')
        ]);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function resultMaterialsSuppliers(){
        return $this->db->get('materials_has_suppliers');
    }

    public function materialUpdate($where){
        $this->db->update('materials', [
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'stock' => $this->input->post('stock'),
            'stock_type' => $this->input->post('stock-type'),
            'status' => $this->input->post('status'),
            'note' => $this->input->post('note'),
            'updated_at' => date('Y-m-d H:i:s')
        ], ['material_id' => $where]);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function materialDelete($where){
        $this->db->delete('materials', ['material_id' => $where]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function purchasesGet($dataStatus){
        if(isset($dataStatus)){
            $query = $this->db->get_where('materials_trans', ['status' => $dataStatus]);
        }else{
            $query = $this->db->get('materials_trans');
        }
        return $query;
    }

    public function purchaseGet($purchaseId){
        $this->db->select('*');
        $this->db->from('materials_trans');
        $this->db->where('material_trans_id', $purchaseId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function purchaseDetailGet($purchaseId){
        $this->db->select('
            material_id,
            material_name,
            supplier_id,
            supplier_name,
            qty,
            note,
            status,
            arrived_at
        ');
        $this->db->from('materials_trans_detail');
        $this->db->where('materials_trans_material_trans_id', $purchaseId);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function materialSuppliersGet($materialId){
        $this->db->select('
            material_id,
            materials.name as material_name,
            materials.stock as material_stock,
            materials.stock_type as material_stock_type,
            suppliers.supplier_id,
            suppliers.name as supplier_name
        ');
        $this->db->from('materials');
        $this->db->join('materials_has_suppliers', 'materials.material_id = materials_has_suppliers.materials_material_id');
        $this->db->join('suppliers', 'materials_has_suppliers.suppliers_supplier_id = suppliers.supplier_id');
        $this->db->where('material_id', $materialId);

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function purchaseMaterialDetailGet($purchaseId, $materialId){
        $this->db->select('
            material_id,
            material_name,
            supplier_id,
            supplier_name,
            qty,
            note,
            status,
            arrived_at
        ');
        $this->db->from('materials_trans_detail');
        $this->db->where([
            'materials_trans_material_trans_id' => $purchaseId,
            'material_id' => $materialId
        ]);
        
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function purchaseCreate($data){
        // query insert table materials_trans
        $this->db->insert('materials_trans',[
            'note' => $data['note'],
            'status' => 'unfinished',
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $materialTransLastId = $this->db->insert_id();

        for ($i=0; $i < count($data['materials']); $i++) { 
            // Get material suppliers data
            $resultMat = $this->materialSuppliersGet($data['materials'][$i])->result()[0];
            
            // query insert table materials_trans_detail
            $this->db->insert('materials_trans_detail', [
                'material_id' => $resultMat->material_id,
                'material_name' => $resultMat->material_name,
                'supplier_id' => $resultMat->supplier_id,
                'supplier_name' => $resultMat->supplier_name,
                'qty' => $data['qtys'][$i],
                'status' => 'notarrived',
                'note' => $data['notes'][$i],
                'materials_trans_material_trans_id' => $materialTransLastId
            ]);
        }
        

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function purMaterialUpdateStatus($purchaseId, $materialId){
        $this->db->update('materials_trans_detail',[
            'status' => 'arrived',
            'arrived_at' => date('Y-m-d H:i:s')
        ], 
        [
            'materials_trans_material_trans_id' => $purchaseId,
            'material_id' => $materialId
        ]);

        $this->db->update('materials_trans',[
            'updated_at' => date('Y-m-d H:i:s')
        ], ['material_trans_id' => $purchaseId]);

        $resultPurMatDetail = $this->purchaseMaterialDetailGet($purchaseId, $materialId)->result()[0];
        $this->db->query('
            UPDATE materials SET stock = stock + '.$resultPurMatDetail->qty.'
            WHERE material_id = '.$materialId
        );

        $resultPurDetail = $this->purchaseDetailGet($purchaseId)->result();
        $run = true;
        array_map(function ($item) use (&$run) {
            if ($item->status != 'arrived') { $run = false; }
        }, $resultPurDetail);
        if ($run) {
            $this->db->update('materials_trans',[
                'status' => 'finished',
                'date_status_finished' => date('Y-m-d H:i:s')
            ], [
                'material_trans_id' => $purchaseId
            ]);
        }       
        
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }



}
