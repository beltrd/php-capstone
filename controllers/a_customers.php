<?php
/**
*Description: Capstone Project PHP!!
*@file a_products.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-11
**/
$title = 'Admin customer';
$slug = "kitchen";

// csrf_token
$_SESSION['csrf_token'] = md5(time());

// controllers
use controllers\Classes\Utility\Validator;

$v = new Validator();
// get all the products
require APP . '/models/product_model.php';
// admin isset model
require APP . '/models/admin_isset.php';
$customer = getAllCustomers($dbh);
$sub_title = 'All customers';

// require
require APP . '/views/a_customers.php';
