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
$title = 'delete product';
$slug = "kitchen";

//
if(empty($_GET['product_id'])){
  $_SESSION['error'] = 'Select product to delete';
  header('Location: ?page=a_product');
  die;
} else {
  $dbh->beginTransaction();

  $query = "INSERT INTO arc_products (SELECT * FROM product WHERE product_id = :product_id)";

  $stmt = $dbh->prepare($query);

  $stmt->bindValue(':product_id', $_GET['product_id'], PDO::PARAM_INT);

  $stmt->execute();

  $query = "DELETE FROM product WHERE product_id = :product_id";

  $stmt = $dbh->prepare($query);

  $stmt->bindValue(':product_id', $_GET['product_id'], PDO::PARAM_INT);

  $stmt->execute();

  $dbh->commit();

}

$_SESSION['success'] = 'Product successfully deleted';
header('Location: ?page=a_products');
die;

// require product model
require APP . '/models/product_model.php';
