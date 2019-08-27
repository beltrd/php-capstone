<?php

function getUserID($dbh, $username)
{
	$query = "SELECT
						customer.customer_id
						FROM customer
						WHERE customer.email_addr = :username";
	// prepare the query and send to mysql, ready for execution
	$stmt = $dbh->prepare($query);

	// Bind our $id value to the named placeholder
	$stmt->bindValue(':username', $username, PDO::PARAM_STR);

	// Execute the query
	$stmt->execute();

	// fetch just one user... the one we inserted
	return $stmt->fetch(PDO::FETCH_ASSOC);
}
