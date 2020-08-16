<?php
session_start();
error_reporting(1);
include('../connection.php');
$adminid=$_SESSION['admin_account_logged_in'];
extract($_REQUEST);
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
    .welcome{
      color: white;
      text-align: center;
    }
    </style>
</head>
<body>
  <?php
  include('menubar.php')
  ?>
  <img class="d-block w-100" src="../img/carosal1.jpg"
          alt="First slide">
          <br>
  <div class="container mt-5 px-5 pt-5 z-depth-1">
    <h1 class="welcome"> Welcome To Class Information System</h1>
    <hr>
  <div class="card-deck text-center">
    <div class="card  bg-light">
      <div class="card-body">
        <h5 class="card-title">Class Venue</h5>
        <p class="card-text">Finding class venue with dynamic maps</p>
        <a href="classvenue.php" class="btn btn-dark">Update</a>
      </div>
    </div>
    <div class="card  bg-light">
      <div class="card-body">
        <h5 class="card-title">Class Schedular</h5>
        <p class="card-text">Manage and make real time class schedule</p>
        <a href="schedular.php" class="btn btn-dark">Update</a>
      </div>
    </div>
    <div class="card  bg-light">
      <div class="card-body">
        <h5 class="card-title">Lecturer Information</h5>
        <p class="card-text">Finding all the lecturers office, phone and email all at one place!</p>
        <a href="lecturer.php" class="btn btn-dark">Update</a>
    </div>
  </div>
</div>
<br>
<br>
</div>
</body>
<br>
<br>
<?php
  include('../footer.html')
  ?>