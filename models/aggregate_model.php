<?php
/**
 *Description: model for aggregate functions
 *@file aggregate_model.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-11
 **/

// aggregate_model.php
// this will have all the avg. min max
// for inoice and product price

// max product price, displays most expensive product
// min product price, displays cheapest product
// average price of products, all products
/**
 * @param $dbh
 * @return avg, max and min price from products
 */
function aggregate_product($dbh)
{
	// query
	$query = "SELECT
						ROUND(AVG(product.price), 2) as avg,
						MAX(product.price) as max,
						MIN(product.price) as min
						FROM product";
	// prepare
	$stmt = $dbh->prepare($query);
	// execute
	$stmt->execute();

	// fetch single item
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

// max invoice price, displays most expensive invoice
// min invoice price, displays cheapest invoice
// average price of invoice, all invoices
/**
 * @param $dbh
 * @return avg, max, min, and sum from invoice
 */
function aggregate_invoice($dbh)
{
	// query
	$query = "SELECT
						ROUND(AVG(invoice.total), 2) as avg,
						MAX(invoice.total) as max,
						MIN(invoice.total) as min,
						SUM(invoice.total) as sum
						FROM invoice";
	// prepare
	$stmt = $dbh->prepare($query);
	// execute
	$stmt->execute();

	// fetch single item
	return $stmt->fetch(PDO::FETCH_ASSOC);
}

/**
 * @param $dbh
 * @param $limit of how many customers you want
 * @return list of latest customers
 */
function recent_customers($dbh, $limit)
{
	// query
	$query = "SELECT
						customer.customer_id as id,
						customer.first_name as name,
						customer.email_addr as email
						FROM
						customer
						ORDER BY created_at DESC
						LIMIT :limit";
	// prepare
	$stmt = $dbh->prepare($query);
	// bind value for limit
	$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
	// execute
	$stmt->execute();

	//fetch all items
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
