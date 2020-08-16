<?php 
session_start();
unset($_SESSION['admin_account_logged_in']);	
header('location:../index.php');
?>