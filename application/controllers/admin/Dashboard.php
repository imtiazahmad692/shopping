<?php
Class Dashboard extends CI_Controller {

    public function index() { 
        $data['page'] = 'admin/dashboard';
        $this->load->view("admin_template", $data);

}
}