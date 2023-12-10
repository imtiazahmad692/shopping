<?php 
Class Oders_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("order_model");
    }
    public function index() {
    $customer_id =   $this->session->userdata("customer_id");
    $data["orders"] = $this->order_model->get_orders($customer_id);
    
    $data["page"] = 'pages/customer_orders';
    $this->load->view('templating', $data);
    }
}