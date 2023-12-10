<?php
class Home extends ci_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("product_model");
        $this->load->library("form_validation");
    }
    public function index() {
        $data['page'] = 'pages/home';
        $data['products'] = $this->product_model->get_products();
        
        $this->load->view("templating", $data);
    }
    
}