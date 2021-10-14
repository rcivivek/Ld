<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LD Electronics</title>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/image/fav.ico">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?=base_url();?>">
        <div class="logo">
            <img src="<?=base_url()?>assets/image/ld.png" alt="">
            
        </div>
    </a>
        <nav>
            <i id="menu-bars" class="fa fa-bars fa-2x" aria-hidden="true" onclick="menu()"></i>
            <ul id="menu">
                <li><a href="<?= base_url('dashboard');?>">Dashboard</a></li>
                <li><a href="<?=base_url('admin/add_product');?>">Add Product</a></li>
                <li><a href="<?=base_url('admin/all_products');?>">All Products</a></li>
                <li><a href="<?=base_url('admin/notification');?>">Notifications</a></li>
                <li><a href="<?=base_url('logout_admin');?>">Logout</a></li>
            </ul>
        </nav>
    </header>
