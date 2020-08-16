<?php 
  require'../connection.php';
  ?>
  <?php
  if(isset($_POST['add'])){
      session_start();
      $time = $_POST['time'];
      $course_o1 = $_POST['course_o1'];
      $course_o2 = $_POST['course_o2'];
      $course_o3 = $_POST['course_o3'];
      $course_o4 = $_POST['course_o4'];
      $course_o5 = $_POST['course_o5'];
      $course_o6 = $_POST['course_o6'];
      $course_o7 = $_POST['course_o7'];
      $course_o8 = $_POST['course_o8'];
      $course_o9 = $_POST['course_o9'];

  $sql= $con->query("INSERT INTO courses_offered (time,course_o1,course_o2,course_o3,course_o4,course_o5,course_o6,course_o7,course_o8,course_o9) values('{$time}', '{$course_o1}', '{$course_o2}', '{$course_o3}', '{$course_o4}', '{$course_o5}', '{$course_o6}', '{$course_o7}', '{$course_o8}', '{$course_o9}')");
  header('location:schedular.php?option=schedular');
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
                <a href="schedular.php" style="color:white"><b>/ Class Schedular</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
<div class="container mt-5 px-5 pt-3 z-depth-1">
<h1>Add Time Slots</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-borderless sty">
	
	<tr>	
		<th>Time</th>
		<td><input type="text"  name="time" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Course No. 1 and Section</th>
		<td><input type="text" name="course_o1" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Course No. 2 and Section</th>
		<td><input type="text" name="course_o2" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Course No. 3 and Section</th>
		<td><input type="text" name="course_o3" class="form-control"/>
		</td>
	</tr>
	
	
	<tr>	
		<th>Course No. 4 and Section</th>
		<td><input type="text" name="course_o4" class="form-control"/>
		</td>
	</tr>

		<tr>	
		<th>Course No. 5 and Section</th>
		<td><input type="text" name="course_o5" class="form-control"/>
		</td>
  </tr>
  <tr>	
		<th>Course No. 6 and Section</th>
		<td><input type="text" name="course_o6" class="form-control"/>
		</td>
  </tr>
  <tr>	
		<th>Course No. 7 and Section</th>
		<td><input type="text" name="course_o7" class="form-control"/>
		</td>
  </tr>
  <tr>	
		<th>Course No. 8 and Section</th>
		<td><input type="text" name="course_o8" class="form-control"/>
		</td>
  </tr>
  <tr>	
		<th>Course No. 9 and Section</th>
		<td><input type="text" name="course_o9" class="form-control"/>
		</td>
	</tr>
    <tr>
        <td colspan="3">
            <input name="add" id="add" type="submit" value="Add Time Slot" class="btn btn-default" style="color:black">
    </td>
</tr>
      </form>
<br>
</div>

