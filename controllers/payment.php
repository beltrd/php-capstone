<?php
/**
*Description: Capstone Project PHP!!
*@file payment.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-13
**/
$title = 'Payment';
$slug = "payment";

if(!empty($_SESSION['csrf_token'])) {
	$csrf_token = $_SESSION['csrf_token'];
} else {
	$csrf_token = '';
}

// require cart_model
require APP. '/models/cart_model.php';
// controllers
use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();

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
// foreach loop to add up the prices and do some simple math
// nothing too fancy geting the prices for each item from cart
foreach ($cart as $product) {
  $subtotal += $product['price'];
  $gst = round(($subtotal * GST),2);
  $pst = round(($subtotal * PST),2);
  $taxes = round(($gst + $pst),2);
  $total = round(($subtotal + $gst + $pst), 2);
}
// emtpy errors array!
$errors = [];
// check the method is post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_SESSION['csrf_token']) OR $_SESSION['csrf_token'] != $_POST['csrf_token']) {
		header('Location: ?page=home');
		die('CSRF token mismatch');
	} else {
		// VALIDATE just required
		foreach ($_POST as $key => $value) {
	    $v->required($key);
		}
		$v->validateString('card_name');
		// if there are no errors go to thanks page
		if(count($v->errors()) == 0){
			// send data to payment method
			$_SESSION['success'] = 'Payment successful!!';
			unset($_SESSION['crsf_token']);
			header('Location: ?page=thanks');
			die;
		}
	}
	// fill errors array with class errors
	$errors = $v->errors();
	$_SESSION['error'] = 'Payment did not go through';
}

// require
require APP . '/views/payment.php';
