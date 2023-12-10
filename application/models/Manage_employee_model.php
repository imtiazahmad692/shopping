<?php 
Class Manage_employee_model extends CI_Model{
    public function show_employee(){
        $query = $this->db->select()->from("admin")->get();
       return $query->result();
    }
}