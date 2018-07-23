<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materials_m');
    }

    public function index() 
    {
        
    }

    public function materialsView(){
        $this->load->view('layout/v_header');
        $this->load->view('materials/v_materials');
        $this->load->view('layout/v_footer');
    }

    public function materialsGet(){
        $result = $this->Materials_m->materialsGet()->result();
        echo json_encode($result);
    }

    public function materialGet(){
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialGet($where);
        echo json_encode($result);
    }

    // public function materialGet(){

    // }

    public function materialCreate(){
        $result = $this->Materials_m->materialCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function materialUpdate(){
        $where = $this->input->post('material-id');
        $result = $this->Materials_m->materialUpdate($where);
        $msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }

    public function materialDelete(){
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

}

/* End of file Controllername.php */