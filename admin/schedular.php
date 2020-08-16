
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
	function delCourse(time)
	{
		if(confirm("You want to delete this Course?"))
		{
		window.location.href='delete_courses.php?time='+time;
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
    <h1>Class Schedular Details</h1><hr>
    <tr>
	<td colspan="12"><a href="add_courses.php?option=add_courses" class="btn btn-default" style="color:black">Add New Time Slot</a></td>
	</tr>
	<tr style="height:40; color:white; background-color: black;">
		<th>Time</th>
		<th>Course No.1 & Section</th>
        <th>Course No.2 & Section</th>
        <th>Course No.3 & Section</th>
        <th>Course No.4 & Section</th>
        <th>Course No.5 & Section</th>
        <th>Course No.6 & Section</th>
        <th>Course No.7 & Section</th>
        <th>Course No.8 & Section</th>
        <th>Course No.9 & Section</th>
		    <th>Update</th>
        <th>Delete</th>
	</tr>
<?php
session_start();
error_reporting(1);
include('../connection.php'); 
$time=$_GET['courses_offered'];
$sql=mysqli_query($con,"select * from courses_offered");
while($res=mysqli_fetch_assoc($sql))
{
$time=$res['time'];
?>
<tr style="color:white;">
		    <td><?php echo $res['time']; ?></td>
		    <td><?php echo $res['course_o1']; ?></td>
        <td><?php echo $res['course_o2']; ?></td>
        <td><?php echo $res['course_o3']; ?></td>
        <td><?php echo $res['course_o4']; ?></td>
        <td><?php echo $res['course_o5']; ?></td>
        <td><?php echo $res['course_o6']; ?></td>
        <td><?php echo $res['course_o7']; ?></td>
        <td><?php echo $res['course_o8']; ?></td>
        <td><?php echo $res['course_o9']; ?></td>
		<td><a href="update_schedular.php?option=update_schedular&time=<?php echo $time; ?>"><i class="far fa-edit" style="color:#ffbb33; margin-left:15px;"></i></a></td>
    <td><a href="#" onclick="delCourse('<?php echo $time; ?>')"><i class="far fa-trash-alt" style="color:#ff4444; margin-left:15px;"></i></a></td>
	</tr>
<?php
}
?>
</table>
<br>
<br>
</div>

