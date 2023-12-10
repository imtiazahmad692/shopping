<?php
Class Products extends My_controller{
    function __construct()
    {
        parent::__construct();  
        $this->load->model("category_model");
        $this->load->model("product_model");
    }
    function index(){
        $data["categories"] = $this->category_model->get_categories();
        $data["products"] = $this->product_model->product_and_category(); 
        $data['page'] = 'admin/products';
        $this->load->view("admin_template", $data);
    }
    function add_new_product(){
        $config = array(
        'upload_path' => "./public/images/",
        'allowed_types' => "jpg|png|jpeg|",
        'overwrite' => TRUE,
        'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    );
    $this->load->library('upload', $config);

        if(!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            print_r($error);
        }else{
            $image_name = $this->upload->data('file_name');
        }
        $table_data =[
            'product_name'=> $this->input->post('product_name'),
            'product_price'=> $this->input->post('product_price'),
            'category_id'=> $this->input->post('category_id'),
            'product_image'=> $image_name

        ];
        $this->product_model->add_product($table_data);
        $this->session->set_flashdata('message','Record added successfully');
        return redirect('admin/products/index');
    }
    function delete_product($id){
        $this->product_model->delete_product($id);
        $this->session->set_flashdata('message','Record Deleted successfully');
        return redirect('admin/products/index');
    }
    function edit_product($id){
        $data['edit_product'] = $this->product_model->edit_product($id);
        
        $data['product_id'] = $id;
        
        $data["categories"] = $this->category_model->get_categories();
        $data['page'] = 'admin/edit_products';
        $this->load->view("admin_template", $data);
        
    }
    function update_products(){
        $config = array(
            'upload_path' => "./public/images/",
            'allowed_types' => "jpg|png|jpeg|",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
        );
        $this->load->library('upload', $config);
    
        if($_FILES['userfile']['name'] == ''){
            $image_name = $this->input->post('old_image');

        }else{
            if(!$this->upload->do_upload('userfile')){
                $error = array('error' => $this->upload->display_errors());
            }else{
                $image_name = $this->upload->data('file_name');
            }
        }
        $table_data =[
            'product_name'=> $this->input->post('product_name'),
            'product_price'=> $this->input->post('product_price'),
            'category_id'=> $this->input->post('category_id'),
            'product_image'=> $image_name

        ];
        $product_id = $this->input->post('product_id');
        $this->product_model->update_products($table_data, $product_id);
        $this->session->set_flashdata('message','Record Updated successfully');
        return redirect('admin/products/index');
    }
    function logout(){
        $this->session->sess_destroy();
        return redirect("home","refresh");
    }

}
