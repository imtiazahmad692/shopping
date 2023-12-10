<?php
Class Category_model extends CI_Model{
    function get_categories(){
        $query = $this->db->select()->from("categories")->get();
        return $query->result();
    }
    public function add_category($data) {
        if($query =   $this->db->insert("categories", $data)) {
          return true;
        }
        return false;
      }
      public function delete_category($id) {
        $this->db->where("id", $id);
        $this->db->delete("categories");
      }
      public function edit_categories($id) {
        $query = $this->db->select()->from("categories")->where(['id'=>$id])->get();
       return $query->row();

      }
      public function update_category($id, $data) {
        $this->db->where('id', $id);
        $this->db->update('categories', $data);
        return true;
      }
}