<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use MathPHP\Statistics\Average;
use MathPHP\Statistics\Regression;
use Carbon\Carbon;

class Productions extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
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
        $result = $this->Productions_m->productionsGet()->result();
        echo json_encode($result);
    }

    public function productionGet(){
        $productionId = $this->input->get('id');
        $result = $this->Productions_m->productionGet($productionId)->result();
        echo json_encode($result);
    }

    public function productionsCreate(){
        $result = $this->Productions_m->productionsCreate();
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

}

/* End of file Controllername.php */
