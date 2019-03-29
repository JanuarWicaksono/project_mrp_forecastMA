<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_m');
        $this->load->model('Productions_m');
    }
    public function index()
    {

    }

    public function productsView()
    {
        $this->load->view('layout/v_header');
        $this->load->view('products/v_products');
        $this->load->view('layout/v_footer');
    }

    public function productsGet()
    {
        $resultProducts = $this->Products_m->productsGet()->result();

        for ($i = 0; $i < count($resultProducts); $i++) {

            $totalUnfinishedProduct = 0;
            $resultProductionByProductUnfinished = $this->Productions_m->productionGetByProductIdUnfinished($resultProducts[$i]->product_id);
            $totProd = 0;
            if (is_array($resultProductionByProductUnfinished)) {
                foreach ($resultProductionByProductUnfinished as $item) {
                    $resultProductionHistories = $this->Productions_m->productionHistoriesGet($item->production_id)->result();
                    if (is_array($resultProductionHistories)) {
                        foreach ($resultProductionHistories as $item2) {
                            $totProd += $item2->num_of_prod;
                        }
                    }
                }
            }

            $resultProducts[$i] = array_merge((array) $resultProducts[$i], ['tot_prod_order' => $totProd]);
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($resultProducts));
    }

    public function productGet()
    {
        $where = $this->input->get('id');
        $result = $this->Products_m->productGet($where)->result();
        echo json_encode($result);
    }

    public function productCreate()
    {
        $data = ['success' => false, 'messages' => []];

        $this->form_validation->set_rules('product-name', 'Product Name', 'required');
        $this->form_validation->set_rules('categories', 'Categories', 'required');
        $this->form_validation->set_rules('expiration', 'Expiration', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('unit-in-stock', 'Unit In Stock', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_message('required', 'Form Ini Tidak Boleh Kosong');
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        if ($this->form_validation->run() == true) {
            $result = $this->Products_m->productCreate();
            if ($result) {
                $data['success'] = true;
            }
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    public function productUpdate()
    {
        $where = $this->input->post('product-id');

        $data = ['success' => false, 'messages' => []];
        $this->form_validation->set_rules('product-name', 'Product Name', 'required');
        $this->form_validation->set_rules('categories', 'Categories', 'required');
        $this->form_validation->set_rules('expiration', 'Expiration', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('unit-in-stock', 'Unit In Stock', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_message('required', 'Form Ini Tidak Boleh Kosong');
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        if ($this->form_validation->run() == true) {
            $result = $this->Products_m->productUpdate($where);
            if ($result) {
                $data['success'] = true;
            }
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    public function productDelete()
    {
        $where = $this->input->get('id');
        $result = $this->Products_m->productDelete($where);
        $msg['success'] = false;
        $msg['type'] = 'deleted';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function categoriesView()
    {
        $this->load->view('layout/v_header');
        $this->load->view('products/v_categories');
        $this->load->view('layout/v_footer');
    }

    public function categoriesGet()
    {
        $result = $this->Products_m->categoriesGet()->result();
        echo json_encode($result);
    }

    public function categoryGet()
    {
        $where = $this->input->get('id');
        $result = $this->Products_m->categoryGet($where)->result();
        echo json_encode($result);
    }

    public function categoryCreate()
    {
        $data = ['success' => false, 'messages' => []];

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_error_delimiters('<label class="error">', '</label>');
        if ($this->form_validation->run() == true) {
            $result = $this->Products_m->categoryCreate();
            if ($result) {
                $data['success'] = true;
            }
        } else {
            foreach ($_POST as $key => $value) {
                $data['messages'][$key] = form_error($key);
            }
        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }

    public function categoryUpdate()
    {
        $where = $this->input->post('category-id');

        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == true) {
            $result = $this->Products_m->categoryUpdate($where);
        }
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function categoryDelete()
    {
        $where = $this->input->get('id');
        $result = $this->Products_m->categoryDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function bomGet()
    {
        $productId = $this->input->get('productWhere');

        $resultProduct = $this->Products_m->productGet($productId)->result();
        // dd();
        $resultBom = $this->Products_m->bomGet($productId);
        $resultProduction = $this->Productions_m->productionsGetByProductId($productId);

        // dd($resultBom->result()[0]->bom_id);

        if (empty($resultBom->result())) {
            $json = [
                'response_status' => 'create',
                'product_id' => $resultProduct[0]->product_id,
                'product_name' => $resultProduct[0]->product_name
            ];
        }elseif (empty($resultProduction)) {
            $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
            $json = [
                'response_status' => 'edit',
                'bom_id' => $resultBom->result()[0]->bom_id,
                'product_id' => $resultProduct[0]->product_id,
                'product_name' => $resultProduct[0]->product_name,
                'materials' => $resultBomHasMaterials,
            ];
        }else{
            $resultBomHasMaterials = $this->Products_m->bomHasMaterialsGet($resultBom->result()[0]->bom_id)->result();
            $json = [
                'response_status' => 'protected',
                'bom_id' => $resultBom->result()[0]->bom_id,
                'product_id' => $resultProduct[0]->product_id,
                'product_name' => $resultProduct[0]->product_name,
                'materials' => $resultBomHasMaterials,
            ];
        }

        $this->output->set_content_type('application/json')->set_output(json_encode($json));
    }

    public function bomCreate()
    {
        $result = $this->Products_m->bomCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function bomUpdate()
    {
        $bomWhere = $this->input->post('bom-id');
        $result = $this->Products_m->bomUpdate($bomWhere);
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
