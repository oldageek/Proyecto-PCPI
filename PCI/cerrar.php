<?php 

session_start();
session_destroy();
$_SESSION = array();

require 'index.php';
die();
?>
