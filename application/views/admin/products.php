<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Product Register</h1>
                        </div>
                        <?php if($this->session->flashdata("message")): ?>
                        <div class="alert alert-dismissible alert-success mt-4">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <h4 class="alert-heading">Message!</h4>
                            <p class="mb-0"><?=$this->session->flashdata('message');?></p>
                        </div>
                        <?php endif;?>
                        <form class="user" method="post" action="<?=base_url('admin/products/add_new_product') ?>"
                            enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select name="category_id" id="" class="form-control form-control-user">
                                    <?php foreach($categories as $key => $category):?>
                                    <option value="<?=$category->id?>"><?=$category->category_name; ?></option>


                                    <?php endforeach;?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="product-name">Product_name</label>
                                <input type="text" name="product_name" class="form-control form-control-user"
                                    id="product-name" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-image">Product_image</label>
                                <input type="file" name="userfile" class="form-control form-control-user"
                                    id="product-image" placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-price">Product_price</label>
                                <input type="number" name="product_price" class="form-control form-control-user"
                                    id="product-price" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="float: right;">Submit</button>
                        </form>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Category</th>
                                    <th>Product_name</th>
                                    <th>Product_image</th>
                                    <th>Product_price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php foreach($products as $key => $product): ?>
                            <tr>
                                <td><?=$product->category_name?></td>
                                <td><?=$product->product_name?></td>
                                <td><img style="width: 100px; height: 80px; "
                                        src="<?=base_url('public/images/'.$product->product_image) ?>" alt=""></td>
                                <td><?=$product->product_price?></td>
                                <td><a href="<?=base_url('admin/products/delete_product/'.$product->id);?>"
                                        class="btn btn-danger">Delete</a></td>
                                <td><a href="<?=base_url('admin/products/edit_product/'.$product->id); ?>"
                                        class="btn btn-success">Edit</a></td>
                            </tr>
                            <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>