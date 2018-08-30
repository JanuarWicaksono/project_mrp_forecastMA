<?php
class Login extends CI_Controller{

function __construct(){
    parent::__construct();		
    $this->load->model('Login_m');
    $this->load->model('Employees_m');
}

function index(){
    $this->load->view('auth/v_login');
}

function loginAction(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $resultCheckEmp = $this->Login_m->loginCheck($username, $password)->result();
    $resultEmployeeLevel = $this->Login_m->employeeGet($resultCheckEmp[0]->employees_levels_level_id)->result()[0];
    $resultEmployeeAccess = $this->Login_m->employeeAccessGet($resultEmployeeLevel->level_id)->result();

    foreach ($resultEmployeeAccess as $item) {
        $pages[] = $item->access_name;
    }

    if($resultCheckEmp > 0){

        $data_session = array_merge(
            (array) $resultCheckEmp[0],
            ['status' => 'login'],
            ['access' => array_merge(
                    (array) $resultEmployeeLevel,
                    ['access_page' => $pages]
                )
            ]
        );

        // echo json_encode($data_session);die();

        $this->session->set_userdata($data_session);

        redirect(base_url("Dashboard"));

    }else{
        redirect(base_url("Login"));
    }
}

function logout(){
    $this->session->sess_destroy();
    redirect(base_url('Login'));
}
}