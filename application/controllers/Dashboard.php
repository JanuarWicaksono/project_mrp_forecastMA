<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Carbon\Carbon;

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
        $this->load->model('Dashboard_m');
	}

	public function index(){
		$this->show_view('dashboard/v_dashboard');
	}

	public function show_view($view, $data = [])
    {
        $this->load->view('layout/v_header', $data);
        $this->load->view($view, $data);
        $this->load->view('layout/v_footer', $data);
	}
	
	public function salesForChartGet(){
		// Get this Mounth
		$now = Carbon::now('M Y');
		// dd($now);

		for ($i = -11; $i < 1; $i++) {
            $prevMonth = Carbon::now()->startOfMonth();
            $dates[] = $prevMonth->addMonths($i - 1); //$dates[] = $prevMounth->addMonths($i);
		}

		$transactions = $this->Dashboard_m->transactionEachMonth();
		// echo json_encode($transactions);die();
		// echo json_encode($transactions);die();
		$results = array_map(function ($date) use ($transactions) {
            $tot = 0;

            array_map(function ($transaction) use (&$tot, $date) {
                if ($transaction->date >= $date->startOfMonth()->format('Y-m-d') && $transaction->date <= $date->endOfMonth()->format('Y-m-d')) {
                    $tot += $transaction->count_purchase_qty;
                }
            }, $transactions);

            return [
                'date' => $date->format('M Y'),
                'count' => $tot,
            ];
		}, $dates);
		
		$this->output->set_content_type('application/json')->set_output(json_encode(
			$results
		));
		
	}

	public function transactionsTotalQty(){
		$resultTransQty = $this->Dashboard_m->transactionsTotalQty();
		
		$totQty = 0;
		foreach ($resultTransQty as $item) {
			$totQty = $totQty + $item->purchase_qty;
		}
		$this->output->set_content_type('application/json')->set_output(json_encode($totQty));
		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */