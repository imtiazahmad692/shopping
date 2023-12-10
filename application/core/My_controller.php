<?php 
Class My_controller extends CI_Controller {
  public function __construct() {
    parent::__construct();
    if(!$this->session->userdata("admin_id")){
        return redirect('home/index');
    }
  }
}
