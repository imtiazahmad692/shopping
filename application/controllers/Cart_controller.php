<?php 
class Cart_controller extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("product_model");
        $this->load->model("order_model");
        // $this->load->library("form_validation");
    }
    public function add_item($product_id){
     $product_detail = $this->product_model->get_product_detail($product_id);
     $data_array = [
        'id' => $product_detail->id,
        'qty' => 1,
        'price' => $product_detail->product_price,
        'name' => $product_detail->product_name,
        'options' => []
    ];

    $this->cart->insert($data_array);

    return redirect('home/index');
    }
    public function show_cart_data(){
        $data['page'] = 'pages/card_data';
        $this->load->view("templating", $data);
}
public function remove_item($item_id){
$this->cart->remove($item_id);
return redirect("cart_controller/show_cart_data");
}
public function cart_checkout(){
    if($this->session->userdata("customer_id")){
        $order_data['customer_id'] = $this->session->userdata("customer_id");
        $order_data['total_bill'] = $this->cart->total();

       $order_id = $this->order_model->add_order('customer_orders', $order_data );
 
foreach($this->cart->contents() as $key => $item){
    $order_detail = [
        'order_id' =>$order_id, 
        'product_id'=>$item['id'],
        'quantity'=>$item['qty'],
        'price'=>$item['price'],
    ];
    $this->order_model->add_order('order_detail', $order_detail);
    
    $this->cart->destroy();

    $this->session->set_flashdata('message','Order added successfully');
    return redirect('home/index');
}

    }else{
        return redirect("customer/login");
    }

}
}