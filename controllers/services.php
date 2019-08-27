<?php
/**
*Description: assigment 1 - capstone convert html to php
*@file services.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-02
**/

// set title of page
$title = 'Our Menu';
$slug = "services";

// require product model
require APP . '/models/product_model.php';

// this will clear the cart
if(isset($_GET['clear'])){
  // unset the cart
  unset($_SESSION['cart']);
  session_regenerate_id();
}

// if category id is not empty it gets the products by category
if(!empty($_GET['category_id'])) {
  // list of products by category sending category id
  $products = getProductByCategory($dbh, $_GET['category_id']);
  // sub title gets the name of category to display on page
  $sub_title = 'Products by category: ' . $products[0]['category'];
} else if(!empty($_GET['search'])){ // if get search not empty
  // pull products from search into products to be display on the page
  $products = seachProducts($dbh, $_GET['search']);
  // sub title equals products like: and the word you searched for
  $sub_title = 'Products like: ' . $_GET['search'];
}
else { // if nothing else is set it gives a limited random list of products
  // products list from random products functions limit to 6
  $products = getRandomProducts($dbh, 6);
  // sub title : products you might like
  $sub_title = 'Products you might like...';
}

// require models for category
require APP . '/models/category_model.php';
// setting the categories to a variable to be display later
$categories = getCategories($dbh);

// require view for services
require APP . '/views/services.php';
