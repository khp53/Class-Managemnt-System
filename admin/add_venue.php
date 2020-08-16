<?php 
  require'../connection.php';
  ?>
  <?php
  if(isset($_POST['add'])){
      session_start();
      $id = $_POST['id'];
      $cno = $_POST['cno'];
      $courses = $_POST['courses'];
      $venue = $_POST['venue'];
      $floor = $_POST['floor'];
       $img=$_FILES['img']['name'];
    $sql= $con->query("INSERT INTO class_venue (id,cno,courses,venue,floor,img) values('{$id}', '{$cno}', '{$courses}', '{$venue}', '{$floor}', '{$img}')");
  	move_uploaded_file($_FILES['img']['tmp_name'],"../maps/".$_FILES['img']['name']);
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
                <a href="classvenue.php" style="color:white"><b>/ Class venue</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
<div class="container mt-5 px-5 pt-3 z-depth-1">
<h1>Add Class Venues</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-borderless sty">
	
	<tr>	
		<th>Id</th>
		<td><input type="text"  name="id" class="form-control"/>
		</td>
	</tr>
    <tr>	
		<th>Course no</th>
		<td><input type="text"  name="cno" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Courses</th>
		<td><input type="text" name="courses" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Venue</th>
		<td><input type="text" name="venue" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Floor</th>
		<td><input type="text" name="floor" class="form-control"/>
		</td>
	</tr>
	
	
	<tr>	
		<th>Venue Map</th>
		<td><input type="file" name="img" class="form-control"/>
		</td>
	</tr>

    <tr>
        <td colspan="3">
            <input name="add" id="add" type="submit" value="Add id Slot" class="btn btn-default" style="color:black">
    </td>
</tr>
      </form>
<br>
</div>

