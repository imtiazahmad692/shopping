<?php 
class Product_model extends CI_Model {

    public function get_products() {
        $query = $this->db->select("*")->from("products")->get();
        return $query->result();
    }
    public function product_and_category() {
        $query = $this->db->select('products.*,categories.category_name')->from("products")->join("categories","products.category_id
        = categories.id")->get();
        return $query->result();
    }
    public function get_product_detail($product_id) {
        $query = $this->db->select()->from("products")->where(['id' => $product_id])->get();
        return $query->row();
    }
    public function add_product($data) {
        $this->db->insert('products', $data);
    }
    public function delete_product($id) {
        $this->db->where('id', $id)->delete('products');
    }
    public function edit_product($id){
        $query = $this->db->select('products.*,categories.category_name')->from("products")->join("categories","products.category_id
        = categories.id")->where(['products.id'=>$id])->get();
       return $query->row();
    }
    public function update_products($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('products', $data);
        return true;
    }
}