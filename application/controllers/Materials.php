<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Materials extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Materials_m');
        // $this->load->helper(array('form', 'url'));
        // $this->load->library('form_validation');
    }

    public function index() 
    {
        
    }

    public function materialsView(){
        $this->load->view('layout/v_header');
        $this->load->view('materials/v_materials');
        $this->load->view('layout/v_footer');
    }

    public function purchaseMaterialsView(){
        $this->load->view('layout/v_header');
        $this->load->view('materials/v_purchase');
        $this->load->view('layout/v_footer');
    }

    public function materialsGet(){
        $result = $this->Materials_m->materialsGet()->result();    
        echo json_encode($result);
    }

    public function materialsUnSelectedGet(){
        $resultMaterials = $this->Materials_m->materialsGet()->result();
        $resultMaterialsSuppliers = $this->Materials_m->resultMaterialsSuppliers()->result();
        $selectedId = [];
        foreach ($resultMaterialsSuppliers as $item) {
            $selectedId[] = $item->materials_material_id;
        }
        foreach ($resultMaterials as $item) {
            if(!in_array($item->material_id, $selectedId)){
                $result[] = $item;
            }
        }
        echo json_encode($result);
    } 

    public function materialGet(){
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialGet($where);
        echo json_encode($result);
    }

    public function materialCreate(){
        $result = $this->Materials_m->materialCreate();
        $msg['success'] = false;
        $msg['type'] = 'add';
        if ($result) {
            $msg['success'] = true;
        }
        echo json_encode($msg);
    }

    public function materialUpdate(){
        $where = $this->input->post('material-id');
        $result = $this->Materials_m->materialUpdate($where);
        $msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
    }

    public function materialDelete(){
        $where = $this->input->get('id');
        $result = $this->Materials_m->materialDelete($where);
        $msg['success'] = true;
        if ($result) {
            $msg['success'] = false;
        }
        echo json_encode($msg);
    }

    public function purchasesGet(){
        $result = $this->Materials_m->purchasesGet()->result();
        echo json_encode($result);
    }

    public function purchaseGet(){
        $purchaseId = $this->input->get('purchase-id');
        $resultPurchase = $this->Materials_m->purchaseGet($purchaseId);
        $resultDetail = $this->Materials_m->purchaseDetailGet($purchaseId)->result();
        
        echo json_encode(array_merge(
            (array) $resultPurchase, 
            ['material_purchases' =>$resultDetail]
        ));
    }

    public function purchaseConf(){
        $status = $this->input->post('status');
        $note = $this->input->post('note');
        $materialsPurc = $this->input->post('materials[]');
        $numOfPurc = $this->input->post('num-of-purchase[]');
        $notesPurc = $this->input->post('notes[]');

        $this->form_validation->set_rules('status', 'status', 'required');
        $this->form_validation->set_rules('materials[]', 'materials', 'required');
        $this->form_validation->set_rules('num-of-purchase[]', 'numof', 'required');

        if($this->form_validation->run() == FALSE){
            return;
            
        }else{

            for ($i=0; $i < count($materialsPurc); $i++) { 
                $resultPurchase[] = [
                    'material' => $this->Materials_m->materialSuppliersGet($materialsPurc[$i])->result()[0],
                    'num_of_purchase' => $numOfPurc[$i],
                    'note' => $notesPurc[$i]
                ];
            }

            $json = [
                'status' => $status,
                'note' => $note,
                'material_purch' => $resultPurchase
            ];

        }

        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($json));
    }

    public function purchaseCreate(){
        $status = $this->input->post('status');
        $note = $this->input->post('note');
        $materialsPurc = $this->input->post('materials[]');
        $numOfPurc = $this->input->post('num-of-purchase[]');
        $notesPurc = $this->input->post('notes[]');
    }

}

/* End of file Controllername.php */