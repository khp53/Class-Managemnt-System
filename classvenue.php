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

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="#" style="color:black"><b>/ Class Venue</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Class Venue System</h2>
        <hr>
    </div>
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course1']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer1']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section1']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue1.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course2']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer2']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section2']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue2.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course3']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer3']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section3']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue3.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course4']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer4']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section4']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue4.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course5']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer5']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section5']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue5.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    
    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
        <h2><b><?php echo $result['course6']; ?></b></h2>
        <h4><b>Lecturer: </b><?php echo $result['lecturer6']; ?></h4>
        <h4><b>Section: </b><?php echo $result['section6']; ?></h4>
        <hr>
        <div class="text-right">
        <a href="classvenue6.php" class="btn btn-primary">Show Map</a>
    </div>
    </div>
    

    <?php
    include('footer.html')
    ?>
  
  </body>
  </html>

        