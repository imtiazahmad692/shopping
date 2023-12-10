<?php 
class Customer_model extends CI_Model {
    public function add_customer($data){
      if($query =   $this->db->insert("customers", $data)) {
        return true;
      }
      return false;
    }
    
    public function check_for_login($phone, $password){
      $query = $this->db->select()->from('customers')->where(['customer_phone' => $phone, 'password' => $password])->get();
      return $query->row();
    }
}
 