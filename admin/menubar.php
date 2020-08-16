<?php
session_start();
$utmid=$_SESSION['admin_account_logged_in'];
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
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
  <style>
.sidenav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #1C2331;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>
<!--Navbar -->
<nav style="background-color: black !important;" class="navbar navbar-expand-lg navbar-dark default-color">
<div class="container">
    <a class="navbar-brand" href="admindashboard.php">
        <img src="../img/UTM.png" height="65" class="d-inline-block align-top"
          alt="utm logo">
      </a>
    &nbsp;<div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="admindashboard.php">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Services
          </a>
          <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="https://my.utm.my">My UTM Portal</a>
            <a class="dropdown-item" href="https://elearning.utm.my">Elearning</a>
            <a class="dropdown-item" href="#">Aims Web</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto nav-flex-icons">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user"> User</i>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-default"
            aria-labelledby="navbarDropdownMenuLink-333">
            <a class="dropdown-item" href="adminprofile.php">View Profile</a>
            <a class="dropdown-item" href="logout.php">Log out</a>
          </div>
        </li>
      </ul>
    </div>
    </div>
  </nav>
  <!--/.Navbar -->
  <!-- Footer -->
<footer class="page-footer font-small unique-color-dark py-2">
    <!-- Footer Elements -->
    <div class="container">
    
      <div class="row">
        <div class="col-md-6 d-flex justify-content-start">

          <div class="footer-copyright text-center bg-transparent">
            &ensp;&ensp;<a href="https://kl.utm.my/">UTM Kuala Lampur </a>&ensp;
            <a href="https://pagoh.utm.my/"> UTM Pagoh</a>&ensp;
            <a href="contact.html"> Contact</a>
          </div>
          
        </div>
        <div class="col-md-6 d-flex justify-content-end">
          <ul class="list-unstyled d-flex mb-0">
            <li>
              <a href="https://fb.com/khp53" class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/utm_my" class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
            </li>
            <li>
              <a href="https://instagram.com/khp53" class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
              <a href="https://youtube.com/canyouKHP" class="mr-3" role="button"><i class="fab fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    
    </div>
    <!-- Footer Elements -->
    </footer>
    <!-- Footer -->
</div>
</body>




  <!-- jQuery -->
  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript">
 function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
