<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Add Employees</h1>
                        </div>
                        <?php if($this->session->flashdata("message")): ?>
                        <div class="alert alert-dismissible alert-success mt-4">
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            <h4 class="alert-heading">Message!</h4>
                            <p class="mb-0"><?=$this->session->flashdata('message');?></p>
                        </div>
                        <?php endif;?>
                        <form class="user" method="post" action="<?=base_url('admin/add_employee/add_employee') ?>">
                            <div class="form-group">
                                <label for="product-name">Employee_name</label>
                                <input type="text" name="name" class="form-control form-control-user" id="name"
                                    placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-image">Employee_email</label>
                                <input type="email" name="email" class="form-control form-control-user" id="email"
                                    placeholder="">
                            </div>

                            <div class="form-group">
                                <label for="product-price">Employee_phone</label>
                                <input type="number" name="phone" class="form-control form-control-user" id="phone"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="product-price">Employee_address</label>
                                <input type="text" name="address" class="form-control form-control-user" id="address"
                                    placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="product-price">Employee_password</label>
                                <input type="password" name="password" class="form-control form-control-user"
                                    id="password" placeholder="">
                            </div>
                            <button type="submit" class="btn btn-primary mb-3" style="float: right;">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>