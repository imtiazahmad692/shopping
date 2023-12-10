<?php 
Class Orders extends My_controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("order_model");
    }
    
    public function index(){
        $data['orders'] = $this->order_model->get_customer_orders();
        
        $data['page'] = 'admin/orders';
        $this->load->view("admin_template", $data);
    }
    public function order_approve($id){
        $this->order_model->order_approve($id);
        return redirect('admin/orders/index');
    }
    public function order_delete($id){
        $this->order_model->order_delete($id);
        $this->session->set_flashdata('message','Record Deleted successfully');
        return redirect('admin/orders/index');

    }
}
