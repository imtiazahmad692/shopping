<?php 
Class Contact_us_model extends CI_Model {
    public function add_contact($data){
        if($query =   $this->db->insert("contact_us", $data)) {
            return true;
          }
          return false;
  }
  public function show_contact(){
    $query = $this->db->select()->from("contact_us")->get();
       return $query->result();
  }
  public function contact_delete($id){
    $this->db->where("id", $id);
    $this->db->delete("contact_us");
  }
}