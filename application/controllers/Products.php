<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Products_m');
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
        $result = $this->Products_m->productsGet()->result();
        echo json_encode($result);
    }

    public function productGet()
    {
        $where = $this->input->get('id');
        $result = $this->Products_m->productGet($where)->result();
        echo json_encode($result);
    }

    public function productCreate()
    {
        $result = $this->Products_m->productCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function productUpdate()
    {
        $where = $this->input->post('product-id');
        $result = $this->Products_m->productUpdate($where);
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
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
        $result = $this->Products_m->categoryCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function categoryUpdate()
    {
        $where = $this->input->post('category-id');
        $result = $this->Products_m->categoryUpdate($where);
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
        $productWhere = $this->input->get('productWhere');
        $resultProduct = $this->Products_m->productGet($productWhere);
        $resultBom = $this->Products_m->bomGet($productWhere);
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
                'products_product_id' => $productWhere,
                'product_name' => $resultProduct->result()[0]->product_name
            ];
        }
        echo json_encode($json);

    }

    public function bomCreate(){
        $result = $this->Products_m->bomCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function bomUpdate(){
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
