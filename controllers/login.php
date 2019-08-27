<?php
/**
 *Description: login page
 *@file login.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-09
 **/

// title and slug for login
$slug = 'login';
$title = 'login';

$errors = [];
if(isset($_SESSION['logged_in'])){
	header('Location: ?page=profile');
	die;
}
// checks if you log out
if(isset($_SESSION['logout'])){
	$msg = $_SESSION['logout_msg'];
	unset($_SESSION['logout']);
	unset($_SESSION['logout_msg']);
}

//check for request method == post
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// DO validation
	if(count($errors) == 0){
		// do a function later to make this easier

		// query to get info
		$query = 'SELECT customer_id, first_name, password, email_addr from customer WHERE email_addr = :email';

		// $params
		$params = array('email' => $_POST['email']);
    // prepare
		$stmt = $dbh->prepare($query);
    // execute
		$stmt->execute($params);
    // gets data and set to user variable
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		// need to create a function for this to make it short and sexy
		if(password_verify($_POST['password'], $user['password'])){
		  // getting the name for the message
			$name = $user['first_name'];
			// greet msg that will display
			$greet_msg = "Welcome $name! You successfully logged in!!";
			// setting a logged in to true
			$_SESSION['logged_in'] = true;
			// success will have the greet message
			$_SESSION['success'] = $greet_msg;
			// getting the username from user email
			$_SESSION['username'] = $user['email_addr'];
			// redirect to the profile if everything is successful
			header('Location: ?page=profile');
			die;
		} else {
		  // this is for failed login
			$_SESSION['failed_login'] = 'We have no matching credentials in our database.';
			$msg = $_SESSION['failed_login'];
			// redirect to login page
			header('Location: ?page=login'); // login
			die;
		}
	}
}

require APP . '/views/login.php';
