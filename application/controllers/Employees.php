<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Employees_m');
    }

    public function index()
    {

    }

    public function employeesView()
    {
        $this->load->view('layout/v_header');
        $this->load->view('employees/v_employees');
        $this->load->view('layout/v_footer');
    }

    public function employeesGet()
    {
        $result = $this->Employees_m->employeesGet()->result();
        echo json_encode($result);
    }

    public function employeeGet()
    {
        $where = $this->input->get('id');
        $result = $this->Employees_m->employeeGet($where);
        echo json_encode($result);
    }

    public function employeeCreate()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirmation Password', 'required');
        if ($this->form_validation->run() == true) {
            $result = $this->Employees_m->employeeCreate();
        }

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function employeeUpdate()
    {
        $where = $this->input->post('employee-id');

        $this->form_validation->set_rules('name', 'Full Name', 'required');
        $this->form_validation->set_rules('level', 'Level', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirmation Password', 'required');
        if ($this->form_validation->run() == true) {
            $result = $this->Employees_m->employeeUpdate($where);
        }

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function employeeDelete()
    {
        $where = $this->input->get('id');
        $result = $this->Employees_m->employeeDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function levelsView()
    {
        $this->load->view('layout/v_header');
        $this->load->view('employees/v_levels');
        $this->load->view('layout/v_footer');
    }

    public function levelsGet()
    {
        $result = $this->Employees_m->levelsGet()->result();
        echo json_encode($result);
    }

    public function levelGet()
    {
        $result = $this->Employees_m->levelGet();
        echo json_encode($result);
    }

    public function levelCreate()
    {
        $this->form_validation->set_rules('level-name', 'Level Name', 'required');
        if ($this->form_validation->run() == TRUE ) {
            $result = $this->Employees_m->levelCreate();
        }
        
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function levelDelete()
    {
        $id = $this->input->get('id');
        $result = $this->Employees_m->levelDelete($id);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function levelUpdate()
    {
        $where = $this->input->post('level-id');
        $this->form_validation->set_rules('level-name', 'Level Name', 'required');

        if ($this->form_validation->run() == TRUE ) {
            $result = $this->Employees_m->levelUpdate($where);
        }
        $msg['success'] = false;
        $msg['type'] = 'add';

        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function levelsAccessGet()
    {
        $result = $this->Employees_m->levelsAccessGet()->result();
        echo json_encode($result);
    }

    public function levelAccessGet()
    {
        $where = $this->input->get('id');
        $levels = $this->Employees_m->levelGet($where)->result();
        $access = $this->Employees_m->levelAccessGet($where)->result();
        if (empty($access)) {
            $access = null;
        }
        foreach ($levels as $result) {
            $arr[] = [
                'level_id' => $result->level_id,
                'level_name' => $result->level_name,
                'level_access' => $access,
            ];
        }
        echo json_encode($arr);
    }

}
