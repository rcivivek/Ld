<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config=[ 'add_product_rules'=>  
     [
      [
        'field'=>'name',
        'lable'=>'Product Name',
        'rules'=>'required'
        ],

      [
        'field'=>'description',
        'lable'=>'Description',
        'rules'=>'required'
        ],
      [
        'field'=>'price',
        'lable'=>'Price',
        'rules'=>'required'
        ],
         [
        'field'=>'category',
        'lable'=>'Category',
        'rules'=>'required'
        ],
         [
        'field'=>'pfile',
        'lable'=>'File',
        'rules'=>'required'
        ], 
     ]
];
$config['set_admin_login_rules']=array(
            
            array(
                      'field'=>'username',
                      'label'=>'Username',
                      'rules'=>'required|alpha'
                   ),
             array(
                      'field'=>'password',
                      'label'=>'Password',
                      'rules'=>'required|max_length[12]'
                   )
                       );
