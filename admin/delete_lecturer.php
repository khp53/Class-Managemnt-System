<?php 
include('../connection.php');

$id=$_GET['id'];

$sql=mysqli_query($con,"select * from lecturer_info where id='$id' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from lecturer_info where id='$id' "))
{
header('location:lecturer.php?option=lecturer');	
}
?>