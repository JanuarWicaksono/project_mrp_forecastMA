<?php
class Productions_m extends CI_model
{
    public function productionCreate($data){

        $cekStartedAtProd = $this->db->get_where('productions', [
                'started_at' => $data['started_at'],
                'products_product_id' => $data['products_product_id']
            ]);

        if ($cekStartedAtProd->num_rows() > 0) {

           $this->db->insert('productions_histories', [
               'num_of_prod' => $data['num_of_prod'],
               'note' => $data['note'],
               'created_at' => date('Y-m-d H:i:s'),
               'productions_production_id' => $cekStartedAtProd->result()[0]->production_id
           ]);

           $this->db->update('productions', [
                'updated_at' => date('Y-m-d H:i:s'),
                ],
                ['production_id' => $cekStartedAtProd->result()[0]->production_id]
            );

        } else {
            
            $this->db->insert('productions', [
                'status' => 'unfinished',
                'started_at' => $data['started_at'],
                'products_product_id' => $data['products_product_id'],
                'created_at' => date('Y-m-d H:i:s')
            ]);
            $productionsLastId = $this->db->insert_id();

            $this->db->insert('productions_histories', [
                'num_of_prod' => $data['num_of_prod'],
                'note' => $data['note'],
                'created_at' => date('Y-m-d H:i:s'),
                'productions_production_id' => $productionsLastId
            ]);

        }

        //minus materials stock based calculation
        foreach ($data['bom'] as $item ) {
            $this->db->query('
                UPDATE materials
                SET stock = stock - '.$item['total_num_comb'].'
                WHERE material_id = '.$item['material_data']->material_id.'
            ');
        }

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function productionsGet(){
        $this->db->select('
            productions.production_id,
            productions.status,
            productions.started_at,
            productions.finished_at,
            productions.created_at,
            productions.updated_at,
            products.product_id,
            products.name as product_name,
            products.unit_in_stock

        ');
        $this->db->from('productions');
        $this->db->join('products', 'productions.products_product_id = products.product_id');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    
    public function productionsGetWhere($status){
        $this->db->select('
            productions.production_id,
            productions.status,
            productions.started_at,
            productions.finished_at,
            productions.created_at,
            productions.updated_at,
            products.product_id,
            products.name as product_name,
            products.unit_in_stock

        ');
        $this->db->from('productions');
        $this->db->join('products', 'productions.products_product_id = products.product_id');
        $this->db->where('productions.status', $status);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function productionGet($productionId){
        $this->db->select('
            *
        ');
        $this->db->from('productions');
        $this->db->where('production_id', $productionId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function productionHistoriesGet($productionId){
        $this->db->select('
            productions_detail_id,
            num_of_prod,
            note,
            created_at,
            updated_at,
            deleted_at,
        ');
        $this->db->from('productions_histories');
        $this->db->where('productions_production_id', $productionId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function productionDelete($productionId){
        $this->db->delete('productions', ['production_id' => $productionId]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    
}
