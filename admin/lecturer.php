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
	function delLecturer(id)
	{
		if(confirm("You want to delete this Lecturer info?"))
		{
		window.location.href='delete_lecturer.php?id='+id;
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
    <h1>Lecturer Details</h1><hr>
    <tr>
	<td colspan="9"><a href="add_lecturer.php?option=add_lecturer" class="btn btn-default" style="color:black">Add New Lecturer</a></td>
	</tr>
	<tr style="height:40; color:white; background-color: black;">
        <th>Lecturer Id</th>
		    <th>Lecturer Names</th>
        <th>Phone</th>
        <th>Office</th>
        <th>Email</th>
        <th>Pictures</th>
		    <th>Update</th>
        <th>Delete</th>
	</tr>
<?php 
session_start();
error_reporting(1);
include('../connection.php');
$sql=mysqli_query($con,"select * from lecturer_info");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['id'];	
$picture=$res['picture'];
$path="../img/lecturer/$picture";
?>
<tr style="color:white;">
        <td><?php echo $res['lno']; ?></td>
	    	<td><?php echo $res['lecturer_name']; ?></td>
        <td><?php echo $res['phone']; ?></td>
        <td><?php echo $res['office']; ?></td>
        <td><?php echo $res['email']; ?></td>
        <td><img src="<?php echo $path;?>" width="80" height="80"/></td>
		    <td><a href="update_lecturer.php?option=update_lecturer&id=<?php echo $id; ?>"><i class="far fa-edit" style="color:#ffbb33; margin-left:15px;"></i></a></td>
        <td><a href="#" onclick="delLecturer('<?php echo $id; ?>')"><i class="far fa-trash-alt" style="color:#ff4444; margin-left:15px;"></i></a></td>
	</tr>
<?php
}
?>
</table>
<br>
<br>
</div>

