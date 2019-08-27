<?php
/**
*Description: controller for product edit
*@file product_edit.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-11
**/
// admin isset model
require APP . '/models/admin_isset.php';

// title and slug for page
$title = 'kitchen';
$slug = "kitchen";

// controllers
use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  // create an update query
  $query = "UPDATE product
            SET
              product.product_name = :product_name,
              product.category_id = :category,
              product.country_of_origin_id = :country_of_origin,
              product.price = :price,
              product.description = :description,
              product.more_details = :more_details,
              product.shipping_availability = :shipping_availability,
              product.in_stock = :in_stock,
              product.re_stock = :re_stock,
              product.image = :image,
              product.calories = :calories,
              product.nutritional_values = :nutritional_values,
              product.chef = :chef,
              product.supplier = :supplier,
              product.ingredients = :ingredients
            WHERE
            product_id = :product_id";
  // prepare
  $stmt = $dbh->prepare($query);
  // binding data
  $params = array (
  ':product_id' => $_POST['product_id'],
  ':product_name' => $_POST['product_name'],
  ':category' => $_POST['category'],
  ':country_of_origin' => $_POST['country_of_origin'],
  ':price' => $_POST['price'],
  ':description' => $_POST['description'],
  ':more_details' => $_POST['more_details'],
  ':shipping_availability' => $_POST['shipping_availability'],
  ':in_stock' => $_POST['in_stock'],
  ':re_stock' => $_POST['re_stock'],
  ':image' => $_POST['image'],
  ':calories' => $_POST['calories'],
  ':nutritional_values' => $_POST['nutritional_values'],
  ':chef' => $_POST['chef'],
  ':supplier' => $_POST['supplier'],
  ':ingredients' => $_POST['ingredients']);

  // If insert was a success, select the inserted record
	if($stmt->execute($params)) {
		// Get the last insert id from the database connection
		$product_id = $dbh->lastInsertId();

    $product = productDetailAdmin($dbh, $_GET['product_id']);

		$success = true;
	} // end if stmt execute params
}
var_dump($product);
var_dump($_POST);
// require
/*
// new empty errors array
$errors = array();
// transfer $_POST
$post = $_POST;

// check to see if the field is empty
$errors = requireFields('product_name', $errors);
*/
// require APP . '/views/product_edit.php';
