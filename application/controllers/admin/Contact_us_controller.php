<?php 
class Contact_us_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model("contact_us_model");
    }
    public function index() {
        $data["contact"] = $this->contact_us_model->show_contact();
        $data['page'] = 'admin/contact_us';
        $this->load->view("admin_template", $data);
    }
    public function contact_delete( $id ) {
        $this->contact_us_model->contact_delete($id);
        return redirect("admin/contact_us_controller/index");
    }
}