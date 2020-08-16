<?php
session_start();
error_reporting(1);
include('../connection.php'); 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from lecturer_info where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
$picture=$_FILES['picture']['name'];
mysqli_query($con,"update lecturer_info set lecturer_name='$lecturer_name',phone='$phone',office='$office' ,email='$email' ,picture='$picture' where id='$id' ");
move_uploaded_file($_FILES['picture']['tmp_name'],"../img/lecturer".$_FILES['picture']['name']);
header('location:lecturer.php?option=lecturer');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UTM Class Information System</title>
  <!-- MDB icon -->
  <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <style>
    body{
      background-color: #1C2331; 
	}
	.sty{
		color: white;
	}
	h1{
        color: white;
    }
    </style>
</head>
<?php
  include('menubar.php')
  ?>
      <footer class="page-footer font-small black py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="admindashboard.php" style="color:white"><b>/ Home</b></a>&ensp;
                <a href="lecturer.php" style="color:white"><b>/ Lecturer Info</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
<div class="container mt-5 px-5 pt-5 z-depth-1">
<h1>Update lecturer info</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-borderless sty">
	
	<tr>	
		<th>Lecturer name</th>
		<td><input type="text" name="lecturer_name" value="<?php echo $res['lecturer_name']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Phones</th>
		<td><input type="text" name="phone" value="<?php echo $res['phone']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Office</th>
		<td><input type="text" name="office" value="<?php echo $res['office']; ?>"  class="form-control"/>
		</td>
	</tr>
	
    <tr>	
		<th>Email</th>
		<td><input type="text" name="email" value="<?php echo $res['email']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Picture</th>
		<td><input type="file" name="picture" value="<?php echo $res['picture']; ?>"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<td colspan="3">
			<input type="submit" class="btn btn-warning" style="color:black" value="Update Lecturer Details" name="update"/>
		</td>
	</tr>
</table> 
</form>
<br>
</div>
<br>
<br>
