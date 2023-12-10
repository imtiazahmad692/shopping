<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">ADD Category Form</h1>
                        </div>
                        <?php if($this->session->flashdata("message")): ?>
                        <div class="alert alert-dismissible alert-success mt-4">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <h4 class="alert-heading">Message!</h4>
                            <p class="mb-0"><?=$this->session->flashdata('message');?></p>
                        </div>
                        <?php endif;?>
                        <form class="user" method="post"
                            action="<?=base_url('admin/add_category/update_category/'.$categories->id) ?>">


                            <div class="form-group">
                                <label for="category-name">Category_name</label>
                                <input type="text" name="category_name" value="<?=$categories->category_name?>"
                                    class="form-control form-control-user" id="category-name" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="float: right;">Add</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>