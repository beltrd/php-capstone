<?php
/**
 *Description: login page
 *@file login.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-09
 **/

// title and slug for login
$slug = 'login';
$title = 'admin login';

$errors = [];
if(isset($_SESSION['logged_in'])){
	header('Location: ?page=kitchen');
	die;
}
if(isset($_SESSION['admin'])){
	header('Location: ?page=kitchen');
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
		$query = 'SELECT username, password from admins WHERE username = :username';

		// $params
		$params = array('username' => $_POST['username']);
    // prepare
		$stmt = $dbh->prepare($query);
    // execute
		$stmt->execute($params);
    // gets data and set to user variable
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		// need to create a function for this to make it short and sexy
		if($_POST['password'] == $user['password']){
		  // getting the name for the message
			$name = $user['username'];
			// greet msg that will display
			$greet_msg = "Welcome $name! You successfully logged in!!";
			// setting a logged in to true
			$_SESSION['logged_in'] = true;
			// success will have the greet message
			$_SESSION['success'] = $greet_msg;
			// getting the username from user email
			$_SESSION['username'] = $user['username'];
			// redirect to the profile if everything is successful
			$_SESSION['admin'] = true;
			header('Location: ?page=kitchen');
			die;
		} else {
		  // this is for failed login
			$_SESSION['failed_login'] = 'We have no matching credentials in our database.';
			$msg = $_SESSION['failed_login'];
			// redirect to login page
			header('Location: ?page=admin'); // login
			die;
		}
	}
}

require APP . '/views/admin.php';
