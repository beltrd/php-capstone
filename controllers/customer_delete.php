<?php
/**
*Description: controller for customer edit
*@file customer_create.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-09-11
**/
// admin isset model
require APP . '/models/admin_isset.php';


// title and slug for page
$title = 'delete customer';
$slug = "kitchen";

//
if(empty($_GET['customer_id'])){
  $_SESSION['error'] = 'Select customer to delete';
  header('Location: ?page=a_customer');
  die;
} else {
  $dbh->beginTransaction();

  $query = "INSERT INTO arc_customers (SELECT * FROM customer WHERE customer_id = :customer_id)";

  $stmt = $dbh->prepare($query);

  $stmt->bindValue(':customer_id', $_GET['customer_id'], PDO::PARAM_INT);

  $stmt->execute();

  $query = "DELETE FROM customer WHERE customer_id = :customer_id";

  $stmt = $dbh->prepare($query);

  $stmt->bindValue(':customer_id', $_GET['customer_id'], PDO::PARAM_INT);

  $stmt->execute();

  $dbh->commit();

}

$_SESSION['success'] = 'customer successfully deleted';
header('Location: ?page=a_customers');
die;
