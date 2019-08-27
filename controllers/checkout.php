<?php
/**
*Description: Capstone Project PHP!!
*@file checkout.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-13
**/
$title = 'check out';
$slug = "checkout";
// csrf_token
$_SESSION['csrf_token'] = md5(time());
// require cart_model
require APP. '/models/cart_model.php';

if(empty($_SESSION['cart'])) {
	$_SESSION['error'] = 'Your shopping cart is empty!  Add some items!';
	header('Location: ?page=services');
	die;
}
$cart = $_SESSION['cart'];
$subtotal = 0;
$gst = 0;
$pst = 0;
$taxes = 0;
$total = 0;
$qty = 1;
// foreach loop to add up the prices and do some simple math
// nothing too fancy geting the prices for each item from cart
foreach ($cart as $product) {
  $subtotal += $product['price'];
  $gst = round(($subtotal * GST),2);
  $pst = round(($subtotal * PST),2);
  $taxes = round(($gst + $pst),2);
  $total = round(($subtotal + $gst + $pst), 2);
}

// require
require APP . '/views/checkout.php';
