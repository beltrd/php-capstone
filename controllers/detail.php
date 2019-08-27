<?php
/**
*Description: Capstone Project PHP!! Shows product Details
*@file detail.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-09
**/
$title = 'Detail';
$slug = "services";
// require

require APP . '/models/product_model.php';
// checks to see if there is a product id
if(!empty($_GET['product_id'])) {
  $product = getProductDetail($dbh, $_GET['product_id']);
  // $title = 'Books by Genre: ' . $products[0]['category'];
} else {
  // if there is no id then sends you back to menu
  header('Location: ?page=services');
  // $title = 'Products you might like...';
}
// require models to get categories
require APP . '/models/category_model.php';
$categories = getCategories($dbh);

require APP . '/views/detail.php';
