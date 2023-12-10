<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping </title>
    <link rel="stylesheet" type="text/css" href="<?=base_url('public/css/bootstrap.min.css')?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?=base_url('home/index') ?>">Home
                            <span class="visually-hidden">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('contact_us/index')?>">Contact Us</a>
                    </li>
                    <?php if(!$this->session->userdata('customer_id')): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("customer/login") ?>">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("customer/register") ?>">Register</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=base_url('oders_controller/index')?>">My Oders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                            href="<?= base_url("customer/logout") ?>">Logout(<?=$this->session->userdata('customer_name') ?>)</a>
                    </li>
                    <?php endif; ?>
                </ul>
                <ul>
                    <a href="<?=base_url('cart_controller/show_cart_data') ?>" class="btn btn-default">Cart</a><span
                        class="badge bg-success"><?=$this->cart->total_items(); ?></span>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">