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
       $sql= mysqli_query($con,"select ca.*, li.* from create_account ca, lecturer_info li where ca.lecturer3=li.lecturer_name AND utmid='$utmid'");
       $result=mysqli_fetch_assoc($sql);
    ?>

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="lecturerinfo.php" style="color:black"><b>/ Lecturer Information</b></a>&ensp;
                <a href="#" style="color:black"><b>/ Lecturer Profile</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Lecturer Information</h2>
        <hr>
    </div>

    <div class="container my-5 pt-1 pb-1 z-depth-1 text-center">
        <img src="img/lecturer/<?php echo $result['picture']; ?>"  style="width:300px;height:300px;" class="img-thumbnail" alt="...">
        <br>
        <br>
        <h2><b>Name: </b><?php echo $result['lecturer3']; ?></h2>
        <h4><b>Email: </b><?php echo $result['email']; ?></h4>
        <h4><b>Phone: </b><?php echo $result['phone']; ?></h4>
        <h4><b>Office: </b><?php echo $result['office']; ?></h4>
    </div>

    <?php
    include('footer.html')
    ?>
  
  </body>
  </html>