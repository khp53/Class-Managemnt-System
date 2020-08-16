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

    <footer class="page-footer font-small grey lighten-4 py-3">
        <div class="container">
        
          <div class="row">
            <div class="col-md-6 d-flex justify-content-start">
    
              <div class="footer-copyright text-center bg-transparent">
                &ensp;&ensp;<a href="dashboard.php" style="color:black"><b>/ Home</b></a>&ensp;
                <a href="classvenue.php" style="color:black"><b>/ Class venues</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Class Venue Maps</h2>
        <hr>
        
    </div>

    <?php
       $sql= mysqli_query($con,"select ca.*, cv.* from create_account ca, class_venue cv where ca.course1=cv.courses AND utmid='$utmid'");
       $result=mysqli_fetch_array($sql);
    ?>

    <div class="container my-5 pt-3 pb-3 pl-5 z-depth-1">
    <table><tr>
    <td>
    <h5><b>Course name: </b></h5>
    </td>
    <td><h6><b><?php echo $result['course1']; ?></b></h6></td>
    <td colspan="3">&nbsp;</td>   
    <td>
    <h5><b>Course section: </b></h5>
    </td>
    <td><h5><?php echo $result['section1']; ?></h5></td>
    </tr>
    &nbsp;
    <tr>
    <td>
    <h5><b>Venue: </b></h5>
    </td>
    <td><h5><?php echo $result['venue']; ?></h5></td>
    <td colspan="3">&nbsp;</td>   
    <td>
    <h5><b>floor: </b></h5>
    </td>
    <td><h5><?php echo $result['floor']; ?></h5></td>
    </tr>
    </table>
    <hr>
    <br>
    <img src="maps/<?php echo $result['img']; ?>" style="width:1050px; height:540px;" alt="...">
    </div>
    <?php
    include('footer.html')
    ?>
  
  </body>
  </html



