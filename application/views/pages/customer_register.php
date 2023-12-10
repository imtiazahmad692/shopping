<h1>Register</h1>

<?php if($this->session->flashdata("message")): ?>
<div class="alert alert-dismissible alert-success mt-4">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <h4 class="alert-heading">Message!</h4>
    <p class="mb-0"><?=$this->session->flashdata('message');?></p>
</div>
<?php endif;?>
<?=validation_errors(); ?>

<form action="<?=base_url("customer/add_customer") ?>" method="post">
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" name="customer_name"
                value="<?= set_value('customer_name'); ?>">
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <label class="form-label" for="address">Address</label>
            <input class="form-control" id="address" type="text" name="customer_address">
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" id="phone" type="number" name="customer_phone"
                value="<?= set_value('customer_phone'); ?>">
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <label class="form-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password">
        </fieldset>
    </div>

    <button class="btn btn-primary mt-4" style="float: right;" type="submit">Submit</button>
</form>