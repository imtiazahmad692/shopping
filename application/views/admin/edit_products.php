<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Update Product</h1>
                        </div>
                        <?php if($this->session->flashdata("message")): ?>
                        <div class="alert alert-dismissible alert-success mt-4">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <h4 class="alert-heading">Message!</h4>
                            <p class="mb-0"><?=$this->session->flashdata('message');?></p>
                        </div>
                        <?php endif;?>
                        <form class="user" method="post" action="<?=base_url('admin/products/update_products') ?>"
                            enctype="multipart/form-data">
                            <input type="hidden" name="product_id" value="<?=$product_id ?>">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" id="" class="form-control form-control-user">
                                    <option value="<?=$edit_product->category_id ?>"> <?=$edit_product->category_name ?>
                                    </option>
                                    <?php foreach($categories as $key => $category):?>
                                    <option value="<?=$category->id?>"> <?=$category->category_name; ?></option>


                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="product-name">Product_name</label>
                                <input type="text" name="product_name" value="<?=$edit_product->product_name ?>"
                                    class="form-control form-control-user" id="product-name" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-image">Product_image</label>
                                <input type="hidden" name="old_image" value="<?=$edit_product->product_image ?>">
                                <input type="file" name="userfile" value="<?=$edit_product->product_image ?>"
                                    class="form-control form-control-user" id="product-image" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-price">Product_price</label>
                                <input type="number" name="product_price" value="<?=$edit_product->product_price ?>"
                                    class="form-control form-control-user" id="product-price" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="float: right;">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>