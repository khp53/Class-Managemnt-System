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
  <link rel="stylesheet" href="../css/glyphicons.css">
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
  <script>
	function delCourse(id)
	{
		if(confirm("You want to delete this Venue?"))
		{
		window.location.href='delete_venue.php?id='+id;
		}
	}
</script>
<footer class="page-footer font-small black py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="admindashboard.php" style="color:white"><b>/ Home</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
<div class="container mt-5 px-5 pt-5 z-depth-1">
<table class="table table-bordered table-striped table-hover">
    <h1>Class Venue Details</h1><hr>
    <tr>
	<td colspan="8"><a href="add_venue.php?option=add_venue" class="btn btn-default" style="color:black">Add New Venues</a></td>
	</tr>
	<tr style="height:40; color:white; background-color: black;">
        <th>Course No.</th>
		    <th>Courses</th>
        <th>Venue</th>
        <th>Floor</th>
        <th>Floor Map</th>
		    <th>Update</th>
        <th>Delete</th>
	</tr>

<?php 
session_start();
error_reporting(1);
include('../connection.php');
$sql=mysqli_query($con,"select * from class_venue");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$img=$res['img'];
$path="../maps/$img";
?>
<tr style="color:white;">
        <td><?php echo $res['cno']; ?></td>
		    <td><?php echo $res['courses']; ?></td>
        <td><?php echo $res['venue']; ?></td>
        <td><?php echo $res['floor']; ?></td>
        <td><img src="<?php echo $path;?>" width="100" height="50"/></td>
		<td><a href="update_venue.php?option=update_venue&id=<?php echo $id; ?>"><i class="far fa-edit" style="color:#ffbb33; margin-left:15px;"></i></a></td>
    <td><a href="#" onclick="delCourse('<?php echo $id; ?>')"><i class="far fa-trash-alt" style="color:#ff4444; margin-left:15px;"></i></a></td>
	</tr>
<?php
}
?>
</table>
<br>
<br>
</div>

