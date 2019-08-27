<?php

if(!isset($_SESSION['admin'])){
	header('Location: ?page=admin');
	die;
}
