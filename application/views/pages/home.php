<?php if($this->session->flashdata("message")): ?>
<div class="alert alert-dismissible alert-success mt-4">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <h4 class="alert-heading">Message!</h4>
    <p class="mb-0"><?=$this->session->flashdata('message');?></p>
</div>
<?php endif;?>

<div class="row">
    <?php foreach($products as $key => $product): ?>
    <div class="col">
        <div class="card" style="width: 18rem; margin:20px;">
            <img src="<?= base_url("public/images/".$product->product_image); ?>" class="card-img-top"
                style="height: 230px;" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?=$product->product_name?></h5>
                <p class="card-text">Price:<?=$product->product_price?></p>
                <a href="<?=base_url('cart_controller/add_item/'.$product->id); ?>" class="btn btn-primary">Add to
                    cart</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>