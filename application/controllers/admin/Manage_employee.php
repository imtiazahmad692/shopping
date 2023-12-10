<?php 
Class Manage_employee extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("manage_employee_model");
    }
    public function show_employee() {
        $data["employees"] = $this->manage_employee_model->show_employee();
        $data['page'] = 'admin/manage_employee';
        $this->load->view("admin_template", $data);
    }
}