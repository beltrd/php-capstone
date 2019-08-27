<?php
ob_start();
session_start();

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
//.'/..' add this if the config is up one dir
//. DIRECTORY_SEPARATOR . '..'

// This is where to Define
define('DB_USER', 'dbeltran_web_user');
define('DB_PASS', 'my_pass2018');
define('DB_DSN', 'mysql:host=localhost;dbname=dbeltran_capstone');

//connect to mysql
$dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

/**
 * @param $className
 */
function autoload($className)
{
  $className = ltrim($className, '\\');
  $fileName  = '';
  $namespace = '';
  if ($lastNsPos = strrpos($className, '\\')) {
    $namespace = substr($className, 0, $lastNsPos);
    $className = substr($className, $lastNsPos + 1);
    $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
  }
  $fileName .=str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

  require $fileName;
}
spl_autoload_register('autoload');
