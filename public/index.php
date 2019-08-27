<?php
// index.php
// define
define('APP', __DIR__ . '/..');
require APP . '/config.php';
// array which the check out should not appear
$no_checkout = array ('home', 'checkout', ' confirm', 'thanks','payment', 'about');
// define allowed routes
$allowed_routes = array('home', 'services', 'about',
                        'contact', 'reviews', 'register',
                        'profile', 'order_online', 'login',
                        'logout', 'detail', 'cart', 'kitchen',
                        'a_products', 'a_invoice','a_customers', 'product_edit', 'edited',
                        'product_create', 'product_delete', 'search',
                        'customer_edit', 'customer_delete', 'checkout','payment',
                        'thanks', 'admin');

// lets get controllers
// load controllers if allowed
if(!isset($_GET['page'])){
  include APP . '/controllers/home.php';
} else if(in_array($_GET['page'], $allowed_routes)){
  // include controller
  include APP . '/controllers/' . $_GET['page'] . '.php';
} else {
  header('HTTP/1.0 404 Not Founf');
  die('ERROR 404');
  include APP . '/controllers/error_handle.php';
}
?>
