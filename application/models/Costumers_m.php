<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Costumers_m extends CI_Model {

    public function costumersGet()
    {
        $query = $this->db->get('costumers');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }
    
    public function costumerGet($where){
        $query = $this->db->get_where('costumers', ['costumer_id' => $where]);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function costumerCreate(){

        $this->db->insert('costumers', [
            'name' => $this->input->post('costumer-name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'status' => $this->input->post('status'),
            'address' => $this->input->post('address')
        ]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function costumerUpdate($where){ 
        $this->db->update('costumers', [
            'name' => $this->input->post('costumer-name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'status' => $this->input->post('status'),
            'address' => $this->input->post('address')
        ], ['costumer_id' => $where]);

        if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
        
    }

    public function costumerDelete(){
        $id = $this->input->get('id');
        $this->db->where('costumer_id', $id);
        $this->db->delete('costumers');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    

}
