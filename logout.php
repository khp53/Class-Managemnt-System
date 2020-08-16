
<?php 
session_start();
unset($_SESSION['create_account_logged_in']);	
header('location:index.php');
?>