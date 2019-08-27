<?php
// check server array to see if the request method is get
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
  // make sure the get is not empty
  if(!empty($_GET['search'])){
    // getting the input, and to lowercase
  	$search = strtolower($_GET['search']);
  	// replacing space to mysql space format
  	$search = str_replace("%20","_", $search);
  	// concatinate % with $search
  	// use to search in mysql
    $keyword = '%' . $search . '%';
  	// query shorten to make it better
  	// only getting what i need
  	// query
  	$query = "SELECT
    product.product_id,
  	product.product_name
  	FROM
  	product
  	WHERE product.product_name LIKE :keyword
  	LIMIT 5";
    // prepare
  	$stmt = $dbh->prepare($query);
    // bind value 
  	$stmt->bindValue(':keyword', $keyword, PDO::PARAM_STR);

  	$stmt->execute();

  	// fetch multiple products
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<ul>\n";
    foreach ($products as $key) {
      echo '<li><a class="more" href="?page=detail&product_id='.$key['product_id'] . '">'. $key['product_name'] . '</a></li>';
    }
    echo "</ul>";
  }
}
