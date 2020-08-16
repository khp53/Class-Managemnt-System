<?php 
  require'../connection.php';
  ?>
  <?php
  if(isset($_POST['add'])){
      session_start();
        $id = $_POST['id'];
        $lno = $_POST['lno'];
        $lecturer_name = $_POST['lecturer_name'];
        $phone = $_POST['phone'];
        $office = $_POST['office'];
        $email = $_POST['email'];
        $picture=$_FILES['picture']['name'];
    $sql= $con->query("INSERT INTO lecturer_info (id,lno,lecturer_name,phone,office,email,picture) values('{$id}', '{$lno}', '{$lecturer_name}', '{$phone}', '{$office}', '{$email}', '{$picture}')");
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
  <link rel="icon" href="../picture/mdb-favicon.ico" type="image/x-icon">
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
<div class="container mt-5 px-5 pt-3 z-depth-1">
<h1>Add lectuer info</h1>
<form method="post" enctype="multipart/form-data">
<table class="table table-borderless sty">
	
	<tr>	
		<th>Id</th>
		<td><input type="text"  name="id" class="form-control"/>
		</td>
	</tr>
    <tr>	
		<th>Lecturer no</th>
		<td><input type="text"  name="lno" class="form-control"/>
		</td>
	</tr>
	<tr>	
		<th>Lecturer Name</th>
		<td><input type="text" name="lecturer_name" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Phone</th>
		<td><input type="text" name="phone" class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Office</th>
		<td><input type="text" name="office" class="form-control"/>
		</td>
	</tr>

    <tr>	
		<th>Email</th>
		<td><input type="text" name="email" class="form-control"/>
		</td>
	</tr>
	
	
	<tr>	
		<th>Picture</th>
		<td><input type="file" name="picture" class="form-control"/>
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

