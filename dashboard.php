<?php
session_start();
error_reporting(1);
include('connection.php');
$utmid=$_SESSION['create_account_logged_in'];
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
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php
  include('menubar.php')
  ?>
  <?php
     $sql= mysqli_query($con,"select * from create_account where utmid='$utmid' ");
     $result=mysqli_fetch_assoc($sql);
  ?>
       <div> <img class="d-block w-100" src="img/carosal1.jpg"
          alt="First slide">
      </div>
  
  <div class="container mt-5 px-5 pt-5 z-depth-1">
    <!--Section: Content-->
    <section class="text-center dark-grey-text">
      
      <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4">Features</h6>
      <!-- Section heading -->
      <h2 class="font-weight-bold">Welcome To Class Information System</h2>
      <hr class="w-header my-4">
      <!-- Section description -->
      <p class="text-muted mx-auto mb-5">UTM Class Management system offers UTM
        students a varity of features such as, managing and making real time class schedule,
        finding class venue with dynamic maps and finding all the lecturers office, phone and email
        all at one place!</p>
  
      <div class="row text-center d-flex justify-content-center">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="view card-img-100 mx-auto mb-4">
            <img src="img/classroom.svg" class="img-fluid" alt="smaple image">
          </div>
          <h5 class="font-weight-normal mb-4">Class Venue System</h5>
          <p class="text-muted px-2 mb-lg-0">Finding class venue with dynamic maps
          </p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="view card-img-100 mx-auto mb-4">
            <img src="img/calendar.svg" class="img-fluid" alt="smaple image">
          </div>
          <h5 class="font-weight-normal mb-4">Class Schedular</h5>
          <p class="text-muted px-2 mb-lg-0">Manage and make real time class schedule
          </p>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="view card-img-100 mx-auto mb-4">
            <img src="img/professor.svg" class="img-fluid" alt="smaple image">
          </div>
          <h5 class="font-weight-normal mb-4">Lecturer Information</h5>
          <p class="text-muted px-2 mb-md-0">Finding all the lecturers office, phone and email
        all at one place!
          </p>
        </div>
      </div>
      
    </section>
    <!--Section: Content-->
  </div>
  <!-- Card -->
<div class="container mt-5 px-5 pt-5 pb-5 mb-5 py-5 z-depth-1">

<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c1.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">

  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course1']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section1']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c2.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">
  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course2']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section2']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c3.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">
  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course3']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section3']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c4.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">
  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course4']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section4']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c5.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">
  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course5']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section5']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
<div class="card">
<!-- Card image -->
<div class="view overlay">
  <img style="width:1100px; height:500px" class="card-img-top" src="img/c6.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>
<!-- Card content -->
<div class="card-body">

  <!-- Title -->
  <h3 class="card-title"><?php echo $result['course6']; ?></h3>
  <!-- Text -->
  <h4 class="card-text"><?php echo $result['section6']; ?></h4>
  <!-- Button -->
  <a href="#" class="btn btn-primary">More</a>
</div>
</div>
<!-- Card -->
</div>
</div>
</div>
</div>
</div>
</div>
  <?php
  include('footer.html')
  ?>      