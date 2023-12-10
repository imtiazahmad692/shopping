<?php
class Admin_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("admin_model");
    }
    public function index(){ 
        $this->load->view("admin/login");
    }
    public function verify_login(){
        $email = $this->input->post("email");
        $password = $this->input->post("password");
        
       $admin = $this->admin_model->check_for_login($email, $password);

       if($admin){
        $this->session->set_userdata(["admin_id"=>$admin->id, "email"=>$admin->email, 
        'admin_login'=>true]);
        return redirect('admin/dashboard','refresh');
       }else{
        $this->session->set_flashdata("message","invalid username or password");
        return redirect("admin/admin_controller/index","refresh");
    }
}
}
