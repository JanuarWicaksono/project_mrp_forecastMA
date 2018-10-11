<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Suppliers_m');
    }

    public function index()
    {
        
    }

    public function suppliersView(){
        $this->load->view('layout/v_header');
        $this->load->view('suppliers/v_suppliers');
        $this->load->view('layout/v_footer');
    }

    public function suppliersGet(){
        $result = $this->Suppliers_m->suppliersGet()->result();
        echo json_encode($result);
    }

    public function supplierGet(){
        $where = $this->input->get('id');
        $supplier = $this->Suppliers_m->supplierGet($where)->result();
        $materials = $this->Suppliers_m->supplierMaterialsGet($supplier[0]->supplier_id)->result();
        $json[] = [
            'supplier_id' => $supplier[0]->supplier_id,
            'name' => $supplier[0]->name,
            'email' => $supplier[0]->email,
            'phone' => $supplier[0]->phone,
            'status' => $supplier[0]->status,
            'address' => $supplier[0]->address,
            'created_at' => $supplier[0]->created_at,
            'updated_at' => $supplier[0]->updated_at,
            'materials' => $materials
        ];
        echo json_encode($json);
    }

    public function supplierCreate(){
        $this->form_validation->set_rules('supplier-name', 'Supplier Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == TRUE) {
            $result = $this->Suppliers_m->supplierCreate();
        }
    
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function supplierUpdate(){
        $where = $this->input->post('supplier-id');
        $this->form_validation->set_rules('supplier-name', 'Supplier Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == TRUE) {     
            $result = $this->Suppliers_m->supplierUpdate($where);
        }
        
        $msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
            $msg['success'] = true;
		}
		echo json_encode($msg);
    }

    public function supplierDelete(){
        $where = $this->input->get('id');        
        $result = $this->Suppliers_m->supplierDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

}

/* End of file Controllername.php */