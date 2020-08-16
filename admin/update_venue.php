<?php
session_start();
error_reporting(1);
include('../connection.php'); 
$id=$_GET['id'];
$sql=mysqli_query($con,"select * from class_venue where id='$id'");
$res=mysqli_fetch_assoc($sql);

extract($_REQUEST);
if(isset($update))
{
$img=$_FILES['file']['name'];
mysqli_query($con,"update class_venue set cno='$cno',courses='$courses',venue='$venue',floor='$floor' ,img='$img' where id='$id' ");
move_uploaded_file($_FILES['file']['tmp_name'],"../maps/".$_FILES['file']['name']);
header('location:classvenue.php?option=classvenue');
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
                <a href="classvenue.php" style="color:white"><b>/ Class Venue</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
<div class="container mt-5 px-5 pt-5 z-depth-1">
<h1>Update Venues</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-borderless sty">
	
	<tr>	
		<th>Id</th>
		<td><input type="text"  name="id" value="<?php echo $res['id']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Course no</th>
		<td><input type="text"  name="cno" value="<?php echo $res['cno']; ?>"  class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Courses</th>
		<td><input type="text" name="courses" value="<?php echo $res['courses']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Venues</th>
		<td><input type="text" name="venue" value="<?php echo $res['venue']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Floor</th>
		<td><input type="text" name="floor" value="<?php echo $res['floor']; ?>"  class="form-control"/>
		</td>
	</tr>
	
	
	<tr>	
		<th>Venue Map</th>
		<td><input type="file" name="file" value="<?php echo $res['img']; ?>"  class="form-control"/>
		</td>
	</tr>

	<tr>
		<td colspan="3">
			<input type="submit" class="btn btn-warning" style="color:black" value="Update Schedule Details" name="update"/>
		</td>
	</tr>
</table> 
</form>
<br>
</div>
<br>
<br>
