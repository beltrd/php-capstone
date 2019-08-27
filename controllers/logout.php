<?php
/**
 *Description: logout file easy and simple
 *@file logout.php
 *@author Diego Beltran <beltrd@gmail.com>
 *@created_at 2018-09-08
 **/

// unset sessions
unset($_SESSION['logged_in']);
unset($_SESSION['success']);
unset($_SESSION['username']);
unset($_SESSION['failed_login']);
unset($_SESSION['admin']);
unset($_SESSION['csrf_token']);
unset($_SESSION['error']);
unset($_SESSION['admin_error']);
session_regenerate_id();
$_SESSION['logout'] = true;
$_SESSION['logout_msg'] = 'You have logged out';
// redirect to login page
// where logout msg will be displayed
header('Location: ?page=login');
die;
