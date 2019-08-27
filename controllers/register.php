<?php
/**
*Description: assigment 2 - Register PHP Form
*@file register.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-02
**/
$title = 'Register';
$slug = "register";

use controllers\Classes\Utility\Validator;
// new validator
$v = new Validator();
// set success false
$success = false;
//test for post request method
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	//empty errors array
	$errors = array();
	//loop that checks required fields
	foreach ($_POST as $key => $value) {
		$v->required($key);
	}
	$v->minLength('password', 6);
	$v->passwordMatch('password','password_con');
  $v->validateString('first_name');
  $v->validateString('last_name');
  $v->validateTel('phone_num');
  $v->validatePostCode('postal_code');
  $v->passWordChecker('password');
  //if no errors run this
	if(count($v->errors()) == 0){
		//create $query
		$query = "INSERT INTO customer
		(first_name, last_name, street_name,
		 city_name, postal_code, province_name,
		 country_name, phone, email_addr, password)
		 VALUES
		(:first_name, :last_name, :street_name,
			:city_name, :postal_code, :province_name,
			:country_name, :phone_num, :email, :password);";
		//prepare $query
		$stmt = $dbh->prepare($query);
		//bind values;
		$params = [':first_name' => $_POST['first_name'],
							 ':last_name' => $_POST['last_name'],
							 ':street_name' => $_POST['street_name'],
							 ':city_name' => $_POST['city_name'],
							 ':postal_code' => $_POST['postal_code'],
							 ':province_name' => $_POST['province_name'],
							 ':country_name' => $_POST['country_name'],
							 ':phone_num' => $_POST['phone_num'],
							 ':email' => $_POST['email'],
							 ':password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
						 ];
		//execute $query
		if($stmt->execute($params)){
			// Get the last insert id from the database connection
			$id = $dbh->lastInsertId();

			// Create our new insert query
			$query = 'SELECT
								*
								FROM customer
							WHERE customer_id = :id';

			// prepare the query and send to mysql, ready for execution
			$stmt = $dbh->prepare($query);

			// Bind our $id value to the named placeholder
			$stmt->bindValue(':id', $id, PDO::PARAM_INT);

			// Execute the query
			$stmt->execute();

			// fetch just one user... the one we inserted
			$user = $stmt->fetch(PDO::FETCH_ASSOC);
			// Set the success flag to true so we can control
			// HTML flow (show or don't show form)
			$success = true;
			$name = $user['first_name'];
			$greet_msg = "Welcome $name! You successfully logged in!!";
			$_SESSION['logged_in'] = true;
			$_SESSION['success'] = $greet_msg;
			$_SESSION['username'] = $user['email_addr'];
		}//end if stmt execute parameters
	}
	$errors = $v->errors();
}

// require
require APP . '/views/register.php';
