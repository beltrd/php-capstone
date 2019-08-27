<?php
/**
 *Description: profile will display all customer info
 *@file kitchen.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-11
 **/

$title = 'Profile';
$slug = "profile";

// check session is logged in
if(isset($_SESSION['logged_in'])){
  // query to get info
  $query = 'SELECT first_name, last_name, street_name,
   city_name, postal_code, province_name,
   country_name, phone, email_addr
   from customer WHERE email_addr = :email_addr';

  //$params
  $params = array('email_addr' => $_SESSION['username']);
  // prepare
  $stmt = $dbh->prepare($query);
  // execute
  $stmt->execute($params);
  // fetched data into user variable
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // check to see if $_SESSION['success'] is not empty
  if(!empty($_SESSION['success'])) {
  	// set the flash message from session success
    $flash_message = $_SESSION['success'];
    // unset success
  	unset($_SESSION['success']);
  } /*else {
    $flash_message = $_SESSION['failed_login'];
    unset($_SESSION['failed_login']);
    header('Location: login.php');
    die;
  }*/
} else {
  // if not logged in it redirects to login page
  header('Location: ?page=login');
  die;
}

// view for profile page
require APP . '/views/profile.php';
