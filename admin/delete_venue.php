<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from class_venue where id='$id' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from class_venue where id='$id' "))
{
header('location:classvenue.php?option=classvenue');	
}
?>