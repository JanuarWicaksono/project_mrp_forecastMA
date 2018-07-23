<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Suppliers_m extends CI_Model
{

    public function suppliersGet()
    {
        $query = $this->db->get('suppliers');
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function supplierGet($where)
    {
        $this->db->select('*');
        $query = $this->db->get_where('suppliers', ['supplier_id' => $where]);
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function supplierMaterialsGet($where){
        $this->db->select('
            material_id,
            name,
            stock,
            status,
            note,
        ');
        $this->db->from('materials_has_suppliers');
        $this->db->join('materials','materials_has_suppliers.materials_material_id = materials.material_id');
        $this->db->where('suppliers_supplier_id', $where);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    public function supplierCreate()
    {
        
        $this->db->insert('suppliers', [
            'name' => $this->input->post('supplier-name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'status' => $this->input->post('status'),
            'address' => $this->input->post('address'),
        ]);
        $lastID = $this->db->insert_id();
        $materials = $this->input->post('materials[]');
        foreach ($materials as $material) {
            $this->db->insert('materials_has_suppliers', [
                'materials_material_id' => $material,
                'suppliers_supplier_id' => $lastID,
            ]);
        }
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function supplierUpdate($where)
    {
        $this->db->update('suppliers', [
            'name' => $this->input->post('supplier-name'),
            'email' => $this->input->post('email'),
            'phone' => $this->input->post('phone'),
            'status' => $this->input->post('status'),
            'address' => $this->input->post('address')
        ], ['supplier_id' => $where]);
    }

    public function supplierDelete($where)
    {
        $this->db->delete('materials_has_suppliers', ['suppliers_supplier_id' => $where]);        
        $this->db->delete('suppliers', ['supplier_id' => $where]);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
