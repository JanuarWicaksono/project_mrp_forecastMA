<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index(){
		// $data = [
		// 	'adwa' => 'wdadad',
		// 	'awdad' => '23151',
		// 	'wdagag' => 'dadfaf',
		// 	'adwa' => 'wda',
		// 	'wf1t2' => 'gawg',
		// 	'wcawaga' => 'vxga',
		// 	'qdGah' => 'sdagwagw',
		// 	'xvzbcn' => 'vxzvas',
		// 	'weqtwt' => 'dadfaf'
		// ];
		// var_dump($data);die();
		// dd($data);
		$this->show_view('dashboard/index');
	}

	public function show_view($view, $data = [])
    {
        $this->load->view('layout/v_header', $data);
        $this->load->view($view, $data);
        $this->load->view('layout/v_footer', $data);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */