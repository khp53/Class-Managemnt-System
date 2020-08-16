<?php
session_start();
error_reporting(1);
include('../connection.php');
$adminid=$_SESSION['admin_account_logged_in'];
extract($_REQUEST);
if(isset($update))
{
$que="update admin_account set adminid='$adminid', name='$name',password='$password' where adminid='$adminid'";
mysqli_query($con,$que);
$msg= "<h3 style='color:white'><b>Profile Updated successfully<b></h3><br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTM Class Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<?php
  include('menubar.php');
  ?>
<body>

 <?php
     $sql= mysqli_query($con,"select * from admin_account where adminid='$adminid' ");
     $result=mysqli_fetch_assoc($sql);
?>
<br>
<div class="container"style="background-color:#1C2331"><!--Primary Id-->
<br>
  <center><h1 style="color:white; padding-left: 200px; padding-right: 200px; padding-top:5px; padding-bottom:5px; border-radius:20px;display:inline-block;font-family: 'Montserrat';display:inline-block;"><strong>User Profile</strong></h1></center><br>
      <center><img src="../img/developers/Artboard 5.png" alt="Bird" width="250" height="250px"></center>
      <br>
      <br>
      
  <div class="container text-center">
  <?php  echo $msg; ?>
    <div class="text-center">
    
    <form method="post" enctype="multipart/form-data">
    <table class="table table-borderless sty">
	
	<tr>	
		<th style="color:white">Admin-ID</th>
		<td><input type="text"  name="adminid" value="<?php echo $result['adminid']; ?>"  class="form-control"readonly/>
		</td>
	</tr>
	<tr>	
		<th style="color:white">Name</th>
		<td><input type="text"  name="name" value="<?php echo $result['name']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th style="color:white">Password</th>
		<td><input type="text" name="password" value="<?php echo $result['password']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>
		<td colspan="3">
            
            <input style="font-size:20px;"  type="submit" value="Update Profile" name="update" class="btn btn-success"/>
		</td>
	</tr>
</table>
    <br>
    <br>
    <br>
    <!--User Profile Update Query-->
        </form>
      </div>
   </div>
 </div>
</div>
</body>
<br>
<?php 
include('../footer.html')
?>
</html>
