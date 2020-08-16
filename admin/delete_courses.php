<?php 
include('../connection.php');

$time=$_GET['time'];

$sql=mysqli_query($con,"select * from courses_offered where time='$time' ");
$res=mysqli_fetch_assoc($sql);

if(mysqli_query($con,"delete from courses_offered where time='$time' "))
{
header('location:schedular.php?option=schedular');	
}
?>