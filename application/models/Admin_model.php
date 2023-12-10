<?php 
class Admin_model extends CI_Model {

    
    public function check_for_login($email, $password){
      $query = $this->db->select()->from('admin')->where(['email' => $email, 'password' => $password])->get();
      return $query->row();
    }
}
 