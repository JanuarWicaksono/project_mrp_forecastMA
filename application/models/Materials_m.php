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
}
