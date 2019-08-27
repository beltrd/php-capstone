<?php
/**
*Description: assigment 1 - capstone convert html to php
*@file index.php
*@author Diego Beltran <beltrd@gmail.com>
*@created_at 2018-08-02
**/
// send back to the search_form
if(!empty($_GET['search'])){
  header('Location: /?page=services&search=' . $_GET['search']);
  die;
}
// send back to the search_form admin side
if(!empty($_GET['s'])){
  header('Location: /?page=a_products&s=' . $_GET['s']);
  die;
}
// this is is for admin still need to make it work dont mark this
// it should be like the search but different ill ask you later
//
if(!empty($_GET['product_id'])){
  header('Location: /?page=product_edit&product_id=' . $_GET['product_id']);
  die;
}
// title of the page
$title = 'Home';
$slug = "home";

// require view for home
require APP . '/views/home.php';
