<?php
/**
*postal_code: controller for customer edit
*@file customer_edit.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-13
**/
// admin isset model
require APP . '/models/admin_isset.php';

// title and slug for page
$title = 'Edit Customer';
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
if(isset($_GET['customer_id'])){
  // $customer will have product details.
  $customer = customerDetailAdmin($dbh, $_GET['customer_id']);
  $sub_title = '';
}
//test for post request method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(empty($_SESSION['csrf_token']) OR $_SESSION['csrf_token'] != $_POST['csrf_token']) {
    $_SESSION['error'] = 'CSRF token mismatch';
    header('Location: ?page=a_customers');
    die();
  } else {
    // current time
    $time = date("Y-m-d h:i:s");
  	//empty errors array
  	$errors = array();
  	//loop that checks required fields
  	foreach ($_POST as $key => $value) {
  		$v->required($key);
  	}
    $v->validateString('first_name');
    $v->validateString('last_name');
    $v->validateTel('phone');
    $v->validatePostCode('postal_code');
    //if no errors run this
  	if(count($v->errors()) == 0){
  		//create $query
  		$query = "UPDATE customer
              SET
              customer.first_name = :first_name,
              customer.last_name = :last_name,
              customer.street_name = :street_name,
              customer.city_name = :city_name,
              customer.postal_code = :postal_code,
              customer.province_name = :province_name,
              customer.country_name = :country_name,
              customer.phone = :phone,
              customer.email_addr = :email_addr,
              customer.updated_at = :updated_at
              WHERE
              customer.customer_id = :customer_id";
      // prepare
      $stmt = $dbh->prepare($query);
      // binding data
      $params = array (
      ':customer_id' => $_POST['customer_id'],
      ':first_name' => $_POST['first_name'],
      ':last_name' => $_POST['last_name'],
      ':street_name' => $_POST['street_name'],
      ':city_name' => $_POST['city_name'],
      ':postal_code' => $_POST['postal_code'],
      ':province_name' => $_POST['province_name'],
      ':country_name' => $_POST['country_name'],
      ':phone' => $_POST['phone'],
      ':email_addr' => $_POST['email_addr'],
      ':updated_at' => $time);

      // execute and check if works
      if($stmt->execute($params)) {
          $_SESSION['success'] = 'Customer Updated with id '. $_POST['customer_id'];
        	unset($_SESSION['crsf_token']);
        	header('Location: /?page=a_customers');
          die;
        } // end if stmt execute params
      }//
    $customer = customerDetailAdmin($dbh, $_POST['customer_id']);
    $errors = $v->errors();
  }
}
require APP . '/views/customer_edit.php';
