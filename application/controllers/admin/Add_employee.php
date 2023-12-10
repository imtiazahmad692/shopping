<?php 
Class Add_employee extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("add_employee_model");
    }
    function index() {
        $data['page'] = 'admin/add_employee';
        $this->load->view("admin_template", $data);
    }
    function add_employee() {
        if($this->add_employee_model->add_employee($this->input->post())) {
            $this->session->set_flashdata("message","Record Added successfuly");
        }else{
            $this->session->set_flashdata("message","Error");
        }
        return redirect("admin/add_employee");
    }
}