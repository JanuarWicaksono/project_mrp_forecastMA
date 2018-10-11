<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Materials extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materials_m');
        $this->load->model('Products_m');
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
    }

    public function index()
    {

    }

    public function materialsView()
    {
        $this->load->view('layout/v_header');
        $this->load->view('materials/v_materials');
        $this->load->view('layout/v_footer');
    }

    public function purchaseMaterialsView()
    {

        $this->load->view('layout/v_header');
        $this->load->view('materials/v_purchase');
        $this->load->view('layout/v_footer');
    }

    public function materialsGet()
    {
        $result = $this->Materials_m->materialsGet()->result();
        echo json_encode($result);
    }

    public function materialsUnSelectedGet()
    {
        $resultMaterials = $this->Materials_m->materialsGet()->result();
        $resultMaterialsSuppliers = $this->Materials_m->resultMaterialsSuppliers()->result();
        $selectedId = [];
        foreach ($resultMaterialsSuppliers as $item) {
            $selectedId[] = $item->materials_material_id;
        }
        foreach ($resultMaterials as $item) {
            if (!in_array($item->material_id, $selectedId)) {
                $result[] = $item;
            }
        }
        echo json_encode($result);
    }

    public function materialGet()
    {
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialGet($where);
        echo json_encode($result);
    }

    public function materialCreate()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('stock-type', 'Stock Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == true) {
            $result = $this->Materials_m->materialCreate();
        }

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function materialUpdate()
    {
        $where = $this->input->post('material-id');

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('stock-type', 'Stock Type', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        if ($this->form_validation->run() == true) {
            $result = $this->Materials_m->materialUpdate($where);
        }
        
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function materialDelete()
    {
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function purchasesGet()
    {
        $dataStatus = $this->input->get('data');
        $result = $this->Materials_m->purchasesGet($dataStatus)->result();
        echo json_encode($result);
    }

    public function purchaseGet()
    {
        $purchaseId = $this->input->get('purchase-id');
        $resultPurchase = $this->Materials_m->purchaseGet($purchaseId);
        $resultDetail = $this->Materials_m->purchaseDetailGet($purchaseId)->result();

        echo json_encode(array_merge(
            (array) $resultPurchase,
            ['material_purchases' => $resultDetail]
        ));
    }

    public function purchaseConf()
    {
        $note = $this->input->post('note');
        $materialsPurc = $this->input->post('materials[]');
        $numOfPurc = $this->input->post('num-of-purchase[]');
        $notesPurc = $this->input->post('notes[]');

        $this->form_validation->set_rules('materials[]', 'materials', 'required');
        $this->form_validation->set_rules('num-of-purchase[]', 'numof', 'required');
        if ($this->form_validation->run() == false) {
            return;
        } else {

            for ($i = 0; $i < count($materialsPurc); $i++) {
                $resultPurchase[] = [
                    'material' => $this->Materials_m->materialSuppliersGet($materialsPurc[$i])->result()[0],
                    'num_of_purchase' => $numOfPurc[$i],
                    'note' => $notesPurc[$i],
                ];
            }

            $json = [
                'note' => $note,
                'material_purch' => $resultPurchase,
            ];

        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }

    public function purchaseBaseProduction()
    {
        $productWhere = $this->input->get('products-id');
        $numProd = $this->input->get('num-prod');

        $resultProduct = $this->Products_m->productGet($productWhere);
        $resultBom = $this->Products_m->bomGet($productWhere);
        if (!empty($resultBom)) {

            $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
            for ($i = 0; $i < count($resultBomHasMaterials); $i++) {

                $totalMinusStock = $resultBomHasMaterials[$i]->stock - ($resultBomHasMaterials[$i]->num_comb_material * $numProd);
                if ($totalMinusStock < 0) {
                    $jsonMaterials[] = [
                        'material_data' => $resultBomHasMaterials[$i],
                        'total_num_comb' => $resultBomHasMaterials[$i]->num_comb_material * $numProd,
                        'cal_total_min_stock' => $totalMinusStock,
                    ];
                }

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

        } elseif ($resultBom == false) {
            $json = [
                'response_status' => false,
                'products_product_id' => $productWhere,
                'product_name' => $resultProduct->result()[0]->product_name,
            ];
        }
        echo json_encode($json);
    }

    public function purchaseCreate()
    {
        $note = $this->input->post('note');
        $materialsPurc = $this->input->post('materials[]');
        $numOfPurc = $this->input->post('num-of-purchase[]');
        $notesPurc = $this->input->post('notes[]');

        // Validation
        $this->form_validation->set_rules('materials[]', 'materials', 'required');
        $this->form_validation->set_rules('num-of-purchase[]', 'numof', 'required');
        if ($this->form_validation->run() == false) {
            return;
        } else {

            $data = [
                'note' => $note,
                'materials' => $materialsPurc,
                'qtys' => $numOfPurc,
                'notes' => $notesPurc,
            ];
            $result = $this->Materials_m->purchaseCreate($data);

        }

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($msg));
    }

    public function purMaterialUpdateStatus()
    {
        $materialId = $this->input->get('material-id');
        $purchaseId = $this->input->get('purchase-id');

        $result = $this->Materials_m->purMaterialUpdateStatus($purchaseId, $materialId);

        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($msg));
    }

}

/* End of file Controllername.php */
