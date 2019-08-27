<?php
/**
*Description: controller for product edit
*@file product_edit.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-11
**/
// check token
if(!empty($_SESSION['csrf_token'])) {
	$csrf_token = $_SESSION['csrf_token'];
} else {
	$csrf_token = '';
}


// title and slug for page
$title = 'Create product';
$slug = "kitchen";

// controllers
use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();
// admin isset model
require APP . '/models/admin_isset.php';
// require product model
require APP . '/models/product_model.php';
$product = productDetailAdmin($dbh, 1);
// require models for category
require APP . '/models/category_model.php';
// count of categories for later use
$category_count = count(getCategories($dbh));
// count of countries for later use
$countries_count = count(getCountries($dbh));

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(empty($_SESSION['csrf_token']) OR $_SESSION['csrf_token'] != $_POST['csrf_token']) {
    $_SESSION['error'] = 'CSRF token mismatch';
    header('Location: ?page=a_customers');
    die();
  } else {
    $list_require = ['product_name',
                      'description', 'more_details',
                     'image', 'nutritional_values',
                     'chef', 'supplier', 'ingredients'];

    $list_boolean = ['shipping_availability', 'in_stock', 're_stock'];

    // float 'price'
    $errors = array();
    // var_dump($_POST);
    // loop that checks if they are strings
    foreach ($list_require as $key) {
      $v->validateString($key);
  	}

    //loop that checks boolean fields
    // from list boolean array
  	foreach ($list_boolean as $key) {
  		$v->validateBoolean($key);
  	}

    // check if number for price is float or int
    $v->validatefloat('price');
    //check category dynamically ohhh
    $v->validateCatergory('category', $category_count);
    // check countries
    $v->validateCountries('country_of_origin', $countries_count);
    // validates calories
    $v->validateNumbs('calories');

    //loop that checks required fields
  	foreach ($list_require as $key) {
  		$v->required($key);
  	}

    //if no errors run this
    if(count($v->errors()) == 0){
      $query =
      "INSERT INTO product
        (product.product_name,
        product.category_id,
        product.country_of_origin_id,
        product.price,
        product.description,
        product.more_details,
        product.shipping_availability,
        product.in_stock,
        product.re_stock,
        product.image,
        product.calories,
        product.nutritional_values,
        product.chef,
        product.supplier,
        product.ingredients)
      VALUES
        (:product_name, :category, :country_of_origin,
         :price, :description, :more_details, :shipping_availability,
         :in_stock, :re_stock, :image, :calories, :nutritional_values,
         :chef, :supplier, :ingredients)";

      $stmt = $dbh->prepare($query);

      $params = array (
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

      if($stmt->execute($params)) {
        $_SESSION['success'] = 'Product Added';
        unset($_SESSION['crsf_token']);
        header('Location: /?page=a_products');
        die;
      }
    }
  }
  $errors = $v->errors();
}



require APP . '/views/product_create.php';
