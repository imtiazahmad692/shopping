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
                        <form class="user" method="post" action="<?=base_url('admin/add_category/add_category') ?>">


                            <div class="form-group">
                                <label for="category-name">Category_name</label>

                                <input type="text" name="category_name" class="form-control form-control-user"
                                    id="category-name" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="float: right;">Add</button>
                        </form>

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categories</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <?php foreach($categories as $key => $item): ?>
                            <tr>
                                <td><?=$item->id?></td>
                                <td><?=$item->category_name?></td>
                                <td><a href="<?=base_url('admin/add_category/delete_category/'.$item->id);?>"
                                        class="btn btn-danger">Delete</a></td>
                                <td><a href="<?=base_url('admin/add_category/edit_category/'.$item->id); ?>"
                                        class="btn btn-success">Edit</a>
                                </td>
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