<?php 
Class Add_employee_model extends CI_Model{
    function add_employee($data){
        if($query =   $this->db->insert("admin", $data)) {
            return true;
          }
          return false;
    }
    
}