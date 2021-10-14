<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LD Electronics</title>
    <link rel="icon" type="image/png" href="<?=base_url('assets');?>/image/fav.ico">
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets');?>/css/responce.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <a href="<?php echo base_url();?>">
                    <img src="<?=base_url('assets');?>/image/ld.png" alt="">
            </a>
        </div>
        <div class="new-bar">
            <a id="open" onclick="openBtn()">Products <i id="open-fa" class="fa fa-caret-down" aria-hidden="true"></i></a>
            <ul id="open-cont">
                <li><a href="<?=base_url('products');?>">TV/Audio/Video</a></li>
                <li><a href="<?=base_url('products');?>">Computer Products</a></li>
                <li><a href="<?=base_url('products');?>">Home Appliances</a></li>
                <li><a href="">Coming Soon</a></li>
            </ul>
        </div>
        <form action="<?=base_url("search");?>" method="post">
            <input id="sear" type="search" placeholder="Search..." name="search">
            <i class="fa fa-search fa-2x" aria-hidden="true" onclick="searchBtn()"></i>
        </form>
        <a href="<?=base_url('cart/view');?>"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
        <nav>
            <i id="menu-bars" class="fa fa-bars fa-2x" aria-hidden="true" onclick="menu()"></i>
            <ul id="menu">
                <li><a href="<?=base_url();?>">Home</a></li>
                <li><a href="<?=base_url('products');?>">Shop Online</a></li>
                <li><a href="<?=base_url('about');?>">About Us</a></li>
                <li><a href="<?=base_url('contact');?>">Contact Us</a></li>
            </ul>
        </nav>
    </header>