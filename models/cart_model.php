<?php
/**
 *Description: model for cart
 *@file cart_model.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-11
 **/

// cart model

// load require models
require APP. '/models/product_model.php';

// define GST and PST
define('GST', 0.08);
define('PST', 0.05);

// addToCart
/**
 * @param $dbh
 * @param $product_id int
 */
function addToCart($dbh, $product_id)
{
  $product = getProductDetail($dbh, $product_id);
  $item = ['product_id' => $product['product_id'],
      		'name' => $product['product_name'],
      		'price' => $product['price']
        ];
        //'qty' => $_POST['qty'] for quanty

  $_SESSION['cart'][$item['product_id']] = $item;
  unset($_SESSION['error']);
  header('Location: ?page=services');
  die;
}
