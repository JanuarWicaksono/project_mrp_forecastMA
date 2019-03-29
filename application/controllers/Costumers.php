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
        $data = ['success' => false, 'messages'=> []];
        $this->form_validation->set_rules('costumer-name', 'Costumer Name', 'required');
        $this->form_validation->set_rules('email', 'Emai', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_message('required', 'Form Ini Tidak Boleh Kosong');
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        if ($this->form_validation->run() == TRUE) {
            $result = $this->Costumers_m->costumerCreate();
            if ($result) {
                $data['success'] = true;
            }
        }else{
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] =  form_error($key);
            }
        }
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));
    }

    public function costumerUpdate(){
        $where = $this->input->post('costumer-id');
        $data = ['success' => false, 'messages'=> []];
        $this->form_validation->set_rules('costumer-name', 'Costumer Name', 'required');
        $this->form_validation->set_rules('email', 'Emai', 'required');
        $this->form_validation->set_rules('phone', 'Phone Number', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_message('required', 'Form Ini Tidak Boleh Kosong');
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        if ($this->form_validation->run() == TRUE) {
            $result = $this->Costumers_m->costumerUpdate($where);
            if ($result) {
                $data['success'] = true;
            }
        }else{
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] =  form_error($key);
            }
        }
        
        $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($data));   
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