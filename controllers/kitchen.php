<?php
/**
*Description: admin panel home page
*@file kitchen.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-11
**/

//title for the page
$title = 'kitchen admin';
$slug = "kitchen";

// controllers
use controllers\Classes\Utility\Validator;

$v = new Validator();
// admin isset model
require APP . '/models/admin_isset.php';
// get all the products
require APP . '/models/product_model.php';
$products = getRandomProducts($dbh, 20);
$sub_title = 'All Products';

require APP . '/models/aggregate_model.php';
//get the aggregate functions
// left aggregate div
// max product price
// avg. product price
// min product price
$aggregate_product = aggregate_product($dbh);

// right aggregate div
// 1st avg. invoice
// max invoice
// min product price
$aggregate_invoice = aggregate_invoice($dbh);

// most recent users
$recent_customers = recent_customers($dbh, 5);


// require
require APP . '/views/kitchen.php';
