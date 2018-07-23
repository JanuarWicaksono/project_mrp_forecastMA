<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Costumers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Costumers_m');
    }

    public function index()
    {
        
    }

    public function costumersView(){
        $this->load->view('layout/v_header');
        $this->load->view('costumers/v_costumers');
        $this->load->view('layout/v_footer');
    }

    public function costumersGet(){
        $result = $this->Costumers_m->costumersGet()->result();
        echo json_encode($result);
    }

    public function costumerGet(){
        $where = $this->input->get('id');
        $result = $this->Costumers_m->costumerGet($where);
        echo json_encode($result);        
    }

    public function costumerCreate(){
        $result = $this->Costumers_m->costumerCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function costumerUpdate(){
        $where = $this->input->post('costumer-id');
        $result = $this->Costumers_m->costumerUpdate($where);
        echo json_encode($result);        
    }

    public function costumerDelete(){
        $result = $this->Costumers_m->costumerDelete();
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

}

/* End of file Controllername.php */