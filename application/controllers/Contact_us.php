<?php 
Class Contact_us extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("contact_us_model");
    }
    function index() {
        $data['page'] = 'pages/contact_us';
        $this->load->view('templating',$data);
    }
    public function add_contact() {
        if($this->contact_us_model->add_contact($this->input->post())) {
            $this->session->set_flashdata("message","Record Added successfuly");
        }else{
            $this->session->set_flashdata("message","Error");
        }
        return redirect("contact_us/index");
    }
}