<?php
class Customer extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->model("customer_model");
        $this->load->library('form_validation');
    }
    
    public function register(){
        $data['page'] = 'pages/customer_register';
        $this->load->view("templating", $data);
    }
    
    function add_customer(){
        $this->form_validation->set_rules("customer_name","Name","required");
        $this->form_validation->set_rules("customer_address","Address","required");
        $this->form_validation->set_rules("customer_phone","Phone","required");
        $this->form_validation->set_rules("password","Password","required");

        
        if($this->form_validation->run() == FALSE){
            $data['page'] = 'pages/customer_register';
            $this->load->view("templating", $data);
        }else{
            if($this->customer_model->add_customer($this->input->post())) {
                $this->session->set_flashdata("message","Record Added successfuly");
            }else{
                $this->session->set_flashdata("message","Error");
            }
            return redirect("customer/register","refresh");
        }
        
    } 

    public function login(){
        $data['page'] = 'pages/customer_login';
        $this->load->view("templating", $data);
    }

    public function confirm_login(){
        $phone = $this->input->post("customer_phone");
        $password = $this->input->post("password");
       $customer = $this->customer_model->check_for_login($phone, $password);

       if($customer){
        $this->session->set_userdata(["customer_id"=>$customer->id, "customer_name"=>$customer->customer_name]);
        return redirect('home','refresh');
       }else{
        $this->session->set_flashdata("message","invalid username or password");
        return redirect("customer/login","refresh");
    }
    }

    public function logout(){
        $this->session->sess_destroy();
        return redirect("home","refresh");
    }

}