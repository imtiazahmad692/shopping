<?php 
class Paractice_model extends CI_Model {
    public function add_data($data) { 
        if($this->db->insert('students',$data)){
            Return true;
        }else{
            Return false;
        }
        
    }
    public function get_data() {
         $this->db->select('*');
        $this->db->from('students');
        $data = $this->db->get();
        return $data->result();
    }
    public function did_delete_row($id){
        $this->db->where('id', $id);
        $this->db->delete('students');
    }
   public function edit($id){
    $query = $this->db->select()->from('students')->where(['id' => $id])->get();
    return $query->row();
   }
   public function update($data,$id){
    $this->db->where('id', $id);
    $this->db->update('students',$data);
    return true;
   }
}
