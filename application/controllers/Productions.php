<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use MathPHP\Statistics\Average;
use MathPHP\Statistics\Regression;
use Carbon\Carbon;

class Productions extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        // $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        // $this->output->set_header('Pragma: no-cache');
        // $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        $this->load->model('Productions_m');
        $this->load->model('Transactions_m');
        $this->load->model('Products_m');
    }

    public function index()
    {

    }

    public function productionsView(){
        $this->load->view('layout/v_header');
        $this->load->view('productions/v_productions');
        $this->load->view('layout/v_footer');
    }

    public function productionsCreateView(){
        $this->load->view('layout/v_header');
        $this->load->view('productions/v_productions_create');
        $this->load->view('layout/v_footer'); 
    }

    public function productionsScheduleView(){
        $this->load->view('layout/v_header');
        $this->load->view('productions/v_productions_schedule');
        $this->load->view('layout/v_footer'); 
    }

    public function productionsForecast()
    {
        //Get Product ID From frontend
        $product_id = $this->input->get('product_id');
        
        // Get this Mounth
        $now = Carbon::now('M Y');

        //if product_id is empty
        if (empty($product_id)) {
            return;
        }

        for($i = -11; $i < 1; $i++) {
            $prevMounth = Carbon::now()->startOfMonth();
            $dates[] = $prevMounth->addMonths($i-1); //$dates[] = $prevMounth->addMonths($i);
        }

        $transactions = $this->Transactions_m->transactionEachMonth($product_id);
        // echo json_encode($transactions);die();
        $resultProduction = $this->productBom($product_id);

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

        foreach($results as $result){
            $stock_count[] = $result['count'];
        }
        $forecastSMA = Average::simpleMovingAverage($stock_count, 3);
        $forecastCMA = Average::cumulativeMovingAverage($stock_count);
        $forecastWMA = Average::weightedMovingAverage($stock_count, 3, [3, 2, 1]);
        $forecastEMA = Average::exponentialMovingAverage($stock_count, 3);

        $json = [
            'product' => $resultProduction,
            'now_mounth' => $now->format('M Y'),
            'data_each_mounth' => $results,
            'forecast_sma' => round(end($forecastSMA)),
            'forecast_cma' => round(end($forecastCMA)),
            'forecast_wma' => round(end($forecastWMA)),
            'forecast_ema' => round(end($forecastEMA))
        ];
        echo json_encode($json);
    }

    public function ChekAvaibleMaterial(){
        //Get Product ID From frontend
        $product_id = $this->input->get('product-id');
        $resultProduct = $this->Products_m->productGet($product_id);
        $resultBom = $this->Products_m->bomGet($product_id);
        $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
        $json = [
            'response_status' => true,
            'bom_id' => $resultBom->result()[0]->bom_id,
            'products_product_id' => $resultBom->result()[0]->products_product_id,
            'product_name' => $resultBom->result()[0]->name,
            'materials' => $resultBomHasMaterials,
        ];
        echo json_encode($json);
    }

    public function productionsGet(){
        $status = $this->input->get('dataStatus');

        if(isset($status)){
            $resultProductions = $this->Productions_m->productionsGetWhere($status)->result();
        }else{
            $resultProductions = $this->Productions_m->productionsGet()->result();
        }

        for ($i=0; $i < count($resultProductions) ; $i++) {

            $numProd = 0;
            $resultProductionHistories = $this->Productions_m->productionHistoriesGet($resultProductions[$i]->production_id)->result();
            for ($j=0; $j < count($resultProductionHistories) ; $j++) {
                $numProd = $numProd + $resultProductionHistories[$j]->num_of_prod;
            }

            $json[] = array_merge(
                (array) $resultProductions[$i],
                ['productions_total_num' => $numProd]
            );

        }
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
        
    }

    public function productionGet(){

        $productionId = $this->input->get('id');

        $resultProduction = $this->Productions_m->productionGet($productionId);
        $resultProduct = $this->Products_m->productGet($resultProduction->products_product_id)->row();
        $resultBom = $this->Products_m->bomGet($resultProduction->products_product_id)->row();
        // echo json_encode($resultBom);die();       
        $resultProductionHistories = $this->Productions_m->productionHistoriesGet($productionId)->result();

        $totalNumProduction = 0;
        foreach ($resultProductionHistories as $item) {
            $totalNumProduction = $totalNumProduction + $item->num_of_prod;
        }

        $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->bom_id)->result();
        for ($i=0; $i < count($resultBomHasMaterials) ; $i++) { 
            $productsBom[] = [
                'material_data' => $resultBomHasMaterials[$i],
                'total_num_comb' => $resultBomHasMaterials[$i]->num_comb_material * $totalNumProduction,
                'cal_total_min_stock' => $resultBomHasMaterials[$i]->stock - ($resultBomHasMaterials[$i]->num_comb_material * $totalNumProduction)
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode(
            array_merge(
                (array) $resultProduction,
                ['num_of_prod' => $totalNumProduction],
                ['product_data' => $resultProduct],
                ['production_histories' => $resultProductionHistories],
                ['production_cal_product_bom' => $productsBom]
            )
        ));
    }

    public function productionsCalendarGet(){
        $resultProductions = $this->Productions_m->productionsGet()->result();

        for ($i=0; $i < count($resultProductions) ; $i++) {

            $numProd = 0;
            $resultProductionHistories = $this->Productions_m->productionHistoriesGet($resultProductions[$i]->production_id)->result();
            for ($j=0; $j < count($resultProductionHistories) ; $j++) {
                $numProd = $numProd + $resultProductionHistories[$j]->num_of_prod;
            }

            $json[] = [
                'title' => $resultProductions[$i]->product_name,
                'start' => $resultProductions[$i]->started_at,
                'end' => $resultProductions[$i]->finished_at,
            ];
            // $json[] = array_merge(
            //     (array) $resultProductions[$i],
            //     ['productions_total_num' => $numProd]
            // );

        }
        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    public function productionsCreate(){
        $products_product_id = $this->input->post('product-input');
        $num_of_prod = $this->input->post('num-prod');
        $started_at = $this->input->post('started-at');
        $note = $this->input->post('note');

        $resultBom = $this->Products_m->bomGet($products_product_id);
        $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();

        for ($i=0; $i < count($resultBomHasMaterials) ; $i++) { 
            $materialsBom[] = [
                'material_data' => $resultBomHasMaterials[$i],
                'total_num_comb' => $resultBomHasMaterials[$i]->num_comb_material * $num_of_prod
            ];
        }

        $data = [
            'products_product_id' => $products_product_id,
            'num_of_prod' => $num_of_prod,
            'started_at' => $started_at,
            'note' => $note,
            'bom' => $materialsBom
        ];

        // dd($data[]);
        
        // dd($data);
        $this->form_validation->set_rules('product-input', 'product', 'required');
        $this->form_validation->set_rules('num-prod', 'num-prod', 'required');
        $this->form_validation->set_rules('started-at', 'started-at', 'required');
        if ($this->form_validation->run() == FALSE){
            return;
        }else{
            $result = $this->Productions_m->productionCreate($data);            
        }

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }
    
    public function productBom($productId)
    {
        $resultProduct = $this->Products_m->productGet($productId);
        $resultBom = $this->Products_m->bomGet($productId);
        if (!empty($resultBom)) {
            $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
            $json = [
                'response_status' => true,
                'bom_id' => $resultBom->result()[0]->bom_id,
                'products_product_id' => $resultBom->result()[0]->products_product_id,
                'product_name' => $resultBom->result()[0]->name,
                'materials' => $resultBomHasMaterials,
            ];

        } elseif($resultBom == false) {
            $json = [
                'response_status' => false,
                'products_product_id' => $productId,
                'product_name' => $resultProduct->result()[0]->product_name
            ];
        }
        return $json;

    }

    public function productionsDetailConfm(){
        $productWhere = $this->input->get('product-input');
        $numProd = $this->input->get('num-prod');

        $resultProduct = $this->Products_m->productGet($productWhere);
        $resultBom = $this->Products_m->bomGet($productWhere);
        if (!empty($resultBom)) {

            $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
            for ($i=0; $i < count($resultBomHasMaterials) ; $i++) { 
                $jsonMaterials[] = [
                    'material_data' => $resultBomHasMaterials[$i],
                    'total_num_comb' => $resultBomHasMaterials[$i]->num_comb_material * $numProd,
                    'cal_total_min_stock' => $resultBomHasMaterials[$i]->stock - ($resultBomHasMaterials[$i]->num_comb_material * $numProd)
                ];
            }

            $json = [
                'response_status' => true,
                'bom_id' => $resultBom->result()[0]->bom_id,
                'product_id' => $resultBom->result()[0]->product_id,
                'product_name' => $resultBom->result()[0]->name,
                'num_productions' => $this->input->get('num-prod'),
                'status' => $this->input->get('status'),
                'started_at' => $this->input->get('started-at'),
                'finished_at' => $this->input->get('finished-at'),
                'note' => $this->input->get('note'),
                'materials' => $jsonMaterials,
            ];

        } elseif($resultBom == false) {
            $json = [
                'response_status' => false,
                'products_product_id' => $productWhere,
                'product_name' => $resultProduct->result()[0]->product_name
            ];
        }
        echo json_encode($json);
    }

    public function productionChangeStatus(){
        $productionId = $this->input->post('production-id');
        $finishedAt = $this->input->post('finished-at');

        

        $data = [
            'production_id' => $productionId,
            'finished_at' => $finishedAt,
            'total_num' => $totalNumProduction
        ];
        dd($data);

        $this->form_validation->set_rules('finished-at', 'product', 'required');
        if ($this->form_validation->run() == FALSE){
            return;
        }else{
            $result = $this->Productions_m->productionChangeStatus($data);
        }

        $msg['success'] = false;
        $msg['type'] = 'deleted';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function productionDelete(){
        $productionId = $this->input->get('production-id');
        $result = $this->Productions_m->productionDelete($productionId);
        $msg['success'] = false;
        $msg['type'] = 'deleted';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);

    }

    public function calTotNumProductions($productionId){
        
    }

}

/* End of file Controllername.php */
