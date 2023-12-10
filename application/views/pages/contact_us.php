<h1>Contact Us</h1>
<?php if($this->session->flashdata("message")): ?>
<div class="alert alert-dismissible alert-success mt-4">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <h4 class="alert-heading">Message!</h4>
    <p class="mb-0"><?=$this->session->flashdata('message');?> </p>
</div>
<?php endif; ?>
<form action="<?=base_url('contact_us/add_contact')?>" method="post">
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="name">Name</label>
            <input class="form-control" id="name" type="text" name="name">
        </fieldset>
    </div>
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="email">Email</label>
            <input class="form-control" id="email" type="email" name="email">
        </fieldset>
    </div>
    <div class="form-group">
        <fieldset>
            <label class="form-label" for="phone">Phone</label>
            <input class="form-control" id="phone" type="number" name="phone">
        </fieldset>
    </div>
    <div class="form-group">
        <label class="form-label" for="phone">Message</label>
        <textarea name="message" id="" cols="100" rows="5"></textarea>
    </div>
    <button class="btn btn-primary mt-4" style="float: right;" type="submit">Submit</button>
</form>