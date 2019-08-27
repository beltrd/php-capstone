<?php

// product_model.php
/**
 * @param $dbh
 * @param $category_id
 * @return array of product by category
 */
function getProductByCategory($dbh, $category_id)
{
  // query
	$query = "SELECT
      product.product_id,
      product.product_name,
      product.category_id,
      category.name AS category,
      country_of_origin.name AS country_of_origin,
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
      product.ingredients
      FROM
          product
      JOIN category USING(category_id)
      JOIN country_of_origin USING(country_of_origin_id)
    	WHERE
    	product.category_id = :category_id";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':category_id', $category_id, PDO::PARAM_INT);
  // execute
	$stmt->execute();

	// fetch multiple products
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param $limit int how many products you want
 * @return array random products
 */
// get random products and returns an array
function getRandomProducts($dbh, $limit)
{
	$query = "SELECT
      product.product_id,
      product.product_name,
      category.name AS category,
      country_of_origin.name AS country_of_origin,
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
      product.ingredients
  FROM
      product
  JOIN category USING(category_id)
  JOIN country_of_origin USING(country_of_origin_id)
  ORDER BY RAND() LIMIT :limit";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
  // execute
	$stmt->execute();

  // fetch multiple products
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param $product_id int
 * @return array product details
 */
// this function get products details
function getProductDetail($dbh, $product_id)
{
  $query = "SELECT
      product.product_id,
      product.product_name,
      category.name AS category,
      country_of_origin.name AS country_of_origin,
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
      product.ingredients
  FROM
      product
  JOIN category USING(category_id)
  JOIN country_of_origin USING(country_of_origin_id)
  WHERE product.product_id = :product_id";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
  // execute
	$stmt->execute();

  // fetch single product
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param $search string
 * @return array list of product
 */
function seachProducts($dbh, $search)
{
	// query
	$query = "SELECT
      product.product_id,
      product.product_name,
      category.name AS category,
      country_of_origin.name AS country_of_origin,
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
      product.ingredients
  FROM
      product
  JOIN category USING(category_id)
  JOIN country_of_origin USING(country_of_origin_id)
	WHERE
	product.product_name LIKE (:search)";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':search', '%'.$search.'%', PDO::PARAM_STR);
  // execute
	$stmt->execute();

  // fetch multiple products
	return $stmt->fetchAll(PDO::FETCH_ASSOC);

}

// get all products
/**
 * @param $dbh
 * @return array all products
 */
function getAllProducts($dbh)
{
	$query = "SELECT
						product.product_id,
						product.product_name,
						category.name AS category,
						country_of_origin.name AS country_of_origin,
						product.price
						FROM
      			product
					  JOIN category USING(category_id)
					  JOIN country_of_origin USING(country_of_origin_id)
						ORDER BY product.product_id ASC";
  // prepare
	$stmt = $dbh->prepare($query);
  // execute
	$stmt->execute();

  // fetch multiple products
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param $product_id int
 * @return array product details
 */
// this function get products details for admin
function productDetailAdmin($dbh, $product_id)
{
  $query = "SELECT
			product.product_id,
      product.product_name,
			product.category_id AS category,
			product.country_of_origin_id AS country_of_origin,
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
      product.ingredients
  FROM
      product
  JOIN category USING(category_id)
  JOIN country_of_origin USING(country_of_origin_id)
  WHERE product.product_id = :product_id";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
  // execute
	$stmt->execute();

  // fetch single product
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param customer_id int
 * @return array customer details
 */
// this function get customers details for admin
function customerDetailAdmin($dbh, $customer_id)
{
  $query = "SELECT
	customer.customer_id,
	customer.first_name,
	customer.last_name,
	customer.street_name,
	customer.city_name,
	customer.postal_code,
	customer.province_name,
	customer.country_name,
	customer.phone,
	customer.email_addr
	FROM
	customer
	WHERE customer.customer_id = :customer_id";
  // prepare
	$stmt = $dbh->prepare($query);
  // bind value
	$stmt->bindValue(':customer_id', $customer_id, PDO::PARAM_INT);
  // execute
	$stmt->execute();

  // fetch single customer
	return $stmt->fetch(PDO::FETCH_ASSOC);
}


function getAllInvoices($dbh)
{
	// $query
	$query = "SELECT * FROM invoice";
  // prepare
	$stmt = $dbh->prepare($query);
  // execute
	$stmt->execute();
  // fetch single product
	return $stmt->fetchALL(PDO::FETCH_ASSOC);
}

//
function getAllCustomers($dbh)
{
	// $query
	$query = "SELECT * FROM customer";
  // prepare
	$stmt = $dbh->prepare($query);
  // execute
	$stmt->execute();
  // fetch single product
	return $stmt->fetchALL(PDO::FETCH_ASSOC);
}
function invoiceIn($dbh)
{
	$query = "INSERT INTO `invoice`
			(`customer_id`,
	    `invoice_comments`,
	    `taxes`,
	    `sub_total`,
	    `total`)
			VALUES(1, 'comments', 0.13, 1, 1.13)";
}

/**
 * function for require fields
 * @param $field String
 * @param $errors Array
 * @return $errors Array
 */
 function requiredFields($field, $errors)
 {
	 // check if the $_POST['field name'] is empty
	 if(empty($_POST[$field])){
		 // makes a label for the $errors array
		 $label = ucwords(str_replace('_', ' ', $field));
		 // creates a message to be display if there are errors
		 $errors[$field] = $label ." is a required field";
	 }
	 return $errors;
 }
