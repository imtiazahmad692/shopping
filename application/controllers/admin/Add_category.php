<?php 
Class Add_category extends CI_Controller {
    function __construct()
    {
        parent::__construct();  
        $this->load->model("category_model");
    }
    public function index(){
        $data['page'] = 'admin/add_category';
        $data['categories'] = $this->category_model->get_categories();
        $this->load->view("admin_template", $data);
    }
    public function add_category(){
        if($this->category_model->add_category($this->input->post())) {
            $this->session->set_flashdata("message","Record Added successfuly");
        }else{
            $this->session->set_flashdata("message","Error");
        }
        return redirect("admin/add_category");
    }
    public function delete_category($id){
        $this->category_model->delete_category($id);
        $this->session->set_flashdata("message","Record deleted successfuly");
        return redirect("admin/add_category");
    }
    public function edit_category($id){
        $data['page'] = 'admin/edit_category';
        $data['categories'] = $this->category_model->edit_categories($id);
        $this->load->view("admin_template", $data);
    }
    Public function update_category($id){
        $this->category_model->update_category($id,$this->input->post());
        $this->session->set_flashdata("message","Record updated successfully");
        return redirect("admin/add_category");
    }
}