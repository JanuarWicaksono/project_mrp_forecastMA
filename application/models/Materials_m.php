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

    public function purchasesGet(){
        $query = $this->db->get('materials_trans');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
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
            qty
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
}
