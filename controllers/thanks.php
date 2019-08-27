<?php
/**
*Description: Capstone Project PHP!!
*@file checkout.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-13
**/
$title = 'Thank you';
$slug = "checkout";
// require cart_model
require APP. '/models/cart_model.php';
// require cart_model
require APP. '/models/user_model.php';
// controllers
use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();
if(isset($_SESSION['admin'])){
	$_SESSION['admin_error'] = 'You are logged in as Admin!';
	header('Location: ?page=services');
	die;
}

if(empty($_SESSION['cart'])) {
	$_SESSION['error'] = 'Your shopping cart is empty!  Add some items!';
	header('Location: ?page=services');
	die;
}
$cart = $_SESSION['cart'];
unset($_SESSION['cart']);
$comments = "";
$subtotal = 0;
$gst = 0;
$pst = 0;
$taxes = 0;
$total = 0;
// foreach loop to add up the prices and do some simple math
// nothing too fancy geting the prices for each item from cart
foreach ($cart as $product) {
  $subtotal += $product['price'];
	$comments .= $product['name']. " ";
  $gst = round(($subtotal * GST),2);
  $pst = round(($subtotal * PST),2);
  $taxes = round(($gst + $pst),2);
  $total = round(($subtotal + $gst + $pst), 2);
}

// if the user is not logged in redirect to check out
if(!isset($_SESSION['logged_in'])){
	$_SESSION['error'] = 'User is not logged in';
	header('Location: ?page=login');
	die;
} else {
	// get users id to be used to insert in the database
	$user = getUserID($dbh, $_SESSION['username']);
	// begin TRANSACTION
	$dbh->beginTransaction();
	// Query the database for user who is logged in
	// Insert all required info into invoice table
	$query = "INSERT INTO invoice
					(invoice.customer_id,
					 invoice.invoice_comments,
				 	 invoice.taxes,
				 	 invoice.sub_total,
				   invoice.total)
					 VALUES
					 (:customer_id,
						:invoice_comments,
						:taxes,
						:sub_total,
						:total)";

	$stmt = $dbh->prepare($query);

	$params = array(
		':customer_id' => $user['customer_id'],
	 	':invoice_comments' => $comments,
		':taxes' => $taxes,
		':sub_total' => $subtotal,
		':total' => $total);

	if($stmt->execute($params)){
		// get the LAST INSERT ID of the invoice
		$id = $dbh->lastInsertId();

		// RUN FOR EACH LOOP OVER CART
		foreach ($cart as $key => $value) {
			// for each item in cart
			// insert into products_invoice intersect table
			$query = "INSERT INTO in_pro
								(in_pro.product_id,
								in_pro.invoice_id,
								in_pro.product_name,
								in_pro.price)
								VALUES
								(:product_id,
								:invoice_id,
								:product_name,
								:price)";
			$stmt = $dbh->prepare($query);
			// $params
			$params = array(
				':product_id' => $value['product_id'],
				':invoice_id' => $id,
				':product_name' => $value['name'],
				':price' => $value['price']
			);
			// execute params
			$stmt->execute($params);
		}// END FOR EACH LOOP

		$dbh->commit();

		// query invoice data;
		$query = "SELECT * FROM in_pro WHERE invoice_id = :id";

		$stmt = $dbh->prepare($query);

		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		// execute
		$stmt->execute();

		// fetch multiple products
		$inter = $stmt->fetchAll(PDO::FETCH_ASSOC);

		// query invoice data;
		$query = "SELECT * FROM invoice WHERE invoice_id = :id";

		$stmt = $dbh->prepare($query);

		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		// execute
		$stmt->execute();

		// fetch multiple products
		$invoice_all = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}

require APP . '/views/thanks.php';
