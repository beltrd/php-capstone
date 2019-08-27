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
$title = 'Edit Product';
$slug = "kitchen";

// check token
if(!empty($_SESSION['csrf_token'])) {
	$csrf_token = $_SESSION['csrf_token'];
} else {
	$csrf_token = '';
}

// controllers
use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();

// require product model
require APP . '/models/product_model.php';
if(isset($_GET['product_id'])){
  // $product will have product details.
  $product = productDetailAdmin($dbh, $_GET['product_id']);
  $sub_title = '';
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(empty($_SESSION['csrf_token']) OR $_SESSION['csrf_token'] != $_POST['csrf_token']) {
    $_SESSION['error'] = 'CSRF token mismatch';
    header('Location: ?page=a_customers');
    die();
  } else {
    // current time
    $time = date("Y-m-d h:i:s");
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
                product.ingredients = :ingredients,
                product.updated_at = :updated_at
              WHERE
              product.product_id = :product_id";
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
    ':ingredients' => $_POST['ingredients'],
    ':updated_at' => $time);

    $product = $_POST;

    // execute and check if works
  	if($stmt->execute($params)) {
      $_SESSION['success'] = 'Product Updated with id '. $_POST['product_id'];
      unset($_SESSION['crsf_token']);
  		header('Location: /?page=a_products');
      die;
  	} // end if stmt execute params
  }
}

require APP . '/views/product_edit.php';
