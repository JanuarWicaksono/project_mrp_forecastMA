<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transactions_m');
    }

    public function index()
    {
        
    }

    public function transactionsView(){
        $this->load->view('layout/v_header');
        $this->load->view('transactions/v_transactions');
        $this->load->view('layout/v_footer');
    }

    public function transactionsCreateView(){
        $this->load->view('layout/v_header');
        $this->load->view('transactions/v_transactions_create');
        $this->load->view('layout/v_footer');
    }

    public function transactionsGet(){
        $costumerWhere = $this->input->get('costumerWhere');
        $dateWhere = $this->input->get('dateWhere');
        if (!empty($costumerWhere) || !empty($dateWhere)) {
            $result = $this->Transactions_m->transactionsGetSearch($costumerWhere, $dateWhere)->result();
        }else{
            $result = $this->Transactions_m->transactionsGet()->result();
        }
        echo json_encode($this->checkGetEmpty($result));
    }

    public function transactionGet(){
        $where = $this->input->get('id');
        $transaction = $this->Transactions_m->transactionGet($where)->result_object();
        $costumer = $this->Transactions_m->transactionCostumerGet($transaction[0]->costumers_costumer_id)->result();
        $products = $this->Transactions_m->transactionProductGet($where)->result();

        $json[] = [
            'transaction_id' => $transaction[0]->transaction_id,
            'date' => $transaction[0]->date,
            'costumer' => $costumer,
            'orders' => $products
        ];

        echo json_encode($json);
    }

    public function transactionCreate(){
        $result = $this->Transactions_m->transactionCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function transactionDelete(){
        $where = $this->input->get('id');
        $result = $this->Transactions_m->transactionDelete($where);
        $msg['success'] = false;
        $msg['type'] = 'deleted';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function checkGetEmpty($result){
        if(empty($result)){
            return $result = [];
        }else{
            return $result;
        }
    }

    public function transactionsTotalSales(){
        $result = $this->Transactions_m->transactionsTotalSales()->result();
        $totalPrices = 0;
        for ($i=0; $i < count($result) ; $i++) {
            $totalPrice = $result[$i]->purchase_qty * $result[$i]->price;
            $totalPrices = $totalPrices + $totalPrice;
        }
        $json = ['total_price' => $totalPrices];
        echo json_encode($json);
    }

}

/* End of file Controllername.php */
