<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['checkout']='cart/checkout';
$route['pagination']='pagination/contact_info';
$route['user_report']='janta/report';
$route['logout_admin']='admin/logout';
$route['valid_admin']='admin_login/login';
$route['cupdated']='cart/update';
$route['search']="search/index";
$route['cart/remove']='users/cart';
$route['dashboard']='admin/dashboard';
$route['janta']='janta/contact';
$route['admin/update']='admin/update';
$route['admin/del_product']='admin/del_product';
$route['admin/all_products']='admin/all_products';
$route['admin/product']='admin/product';
$route['admin/(:any)']='admin/index/$1';
$route['admin']='admin/dashboard';
$route['cart']='users/view';
$route['cart/(:any)']='cart/index/$1';
$route['category/(:any)']='users/filter/$1';
$route['products/(:any)']='users/view/$1';
$route['products']='users/products';
$route['(:any)']='users/index/$1';
$route['default_controller'] = 'users';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
