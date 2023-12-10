<?php
class Order_model extends CI_Model {
    public function add_order($table_name,$table_data){
        if($query = $this->db->insert($table_name, $table_data)){
            return $this->db->insert_id();

    }
    return false;
}
public function get_customer_orders(){
    $query = $this->db->select()->from("customer_orders")->join("customers","customer_orders.customer_id
        = customers.id")->get();
       return $query->result();
}
public function order_approve($id){
    $this->db->where('o_id', $id);
    $this->db->update('customer_orders', ['status'=>'approved']);
    return true;
}
public function order_delete($id){
    $this->db->where('o_id', $id);
    $this->db->delete('customer_orders');
}
public function get_orders($customer_id){
    $query = $this->db->select()->from('customer_orders')->where(['customer_id' => $customer_id])->get();
    return $query->result();
}
}