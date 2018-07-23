<?php
class Productions_m extends CI_model
{
    public function productionsCreate(){
        $this->db->insert('productions', [
            'num_production' => $this->input->post('num-prod'),
            'note' => $this->input->post('note'),
            'status' => $this->input->post('status'),
            'started_at' => $this->input->post('started-at'),
            'finished_at' => $this->input->post('updated-at'),
            'created_at' => date('Y-m-d H:i:s'),
            'products_product_id' => $this->input->post('products-id')
        ]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function productionsGet(){
        $this->db->select('
            productions.production_id,
            productions.num_production,
            productions.note,
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

    public function productionGet($productionId){
        $this->db->select('
            productions.production_id,
            productions.num_production,
            productions.note,
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
        $this->db->where('production_id', $productionId);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
}
