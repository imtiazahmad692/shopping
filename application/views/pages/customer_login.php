<h1>Login</h1>
<?php if($this->session->flashdata("message")): ?>
<div class="alert alert-dismissible alert-danger mt-4">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <h4 class="alert-heading">Message!</h4>
    <p class="mb-0"><?=$this->session->flashdata('message');?> </p>
</div>
<?php endif; ?>
<form action="<?=base_url('customer/confirm_login')?>" method="post">
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" id="phone" type="number" name="customer_phone">
        </fieldset>
    </div>
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="password">Password</label>
            <input class="form-control" id="password" type="password" name="password">
        </fieldset>
    </div>
    <button class="btn btn-primary mt-4" style="float: right;" type="submit">Login</button>
</form>