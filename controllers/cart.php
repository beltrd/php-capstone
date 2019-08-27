<?php
/**
 *Description: this is for the cart
 *@file cart.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-10
 **/

// multi items cart!

// load models
require APP . '/models/cart_model.php';

// make sure there is a cart or create a new one
if(!isset($_SESSION['cart'])){
  // creating a new cart session array
  $_SESSION['cart'] = array();
}

// if there is a cart
if(!empty($_POST['product_id'])){
  // adds to cart sending the product id to function
  addToCart($dbh, $_POST['product_id']);
  unset($_SESSION['error']);
  unset($_SESSION['success']);
  header('Location: '. $_SERVER['HTTP_REFERER']);
  die;
}
