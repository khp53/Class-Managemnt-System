<?php
session_start();
error_reporting(1);
if($_SESSION['admin_account_logged_in']!="")
{
header('location:admindashboard.php');
}
error_reporting(1);
require('../connection.php');
extract($_REQUEST);
if(isset($login))
{
  if($adminid=="" || $pass=="")
  {
  $error= "<h4 style='color:red'>fill all details</h4>";
  }
  else
  {
  $sql=mysqli_query($con,"select * from admin_account where adminid='$adminid' && password='$pass' ");
    if(mysqli_num_rows($sql))
    {
    $_SESSION['admin_account_logged_in']=$adminid;
    header('location:admindashboard.php');
    }
    else
    {
        $error= "<h3 style='color:red'>Invalid login details</h3>";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>UTM Class Management System</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <!-- Image and text -->
  <nav style="background-color: #54002a !important;" class="navbar navbar-dark red darken-4">
    <div class="container">
    <a class="navbar-brand" href="../index.php">
      <img src="../img/UTM.png" height="65" class="d-inline-block align-top"
        alt="utm logo">
    </a>
  </div>
  </nav>
<!-- Footer -->
<footer class="page-footer font-small unique-color-dark py-2">
<!-- Footer Elements -->
<div class="container">

  <div class="row">
    <div class="col-md-6 d-flex justify-content-start">
      <!-- Copyright -->
      <div class="footer-copyright text-center bg-transparent">
        &ensp;<a href="https://kl.utm.my/">UTM Kuala Lampur </a>&ensp;
        <a href="https://pagoh.utm.my/"> UTM Pagoh</a>&ensp;
        <a href="contact.html"> Contact</a>
      </div>
      <!-- Copyright -->
    </div>
    <div class="col-md-6 d-flex justify-content-end">
      <ul class="list-unstyled d-flex mb-0">
        <li>
          <a class="mr-3" role="button"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a class="mr-3" role="button"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a class="mr-3" role="button"><i class="fab fa-instagram"></i></a>
        </li>
        <li>
          <a class="" role="button"><i class="fab fa-youtube"></i></a>
        </li>
      </ul>
    </div>
  </div>

</div>
<!-- Footer Elements -->
</footer>
<!-- Footer -->
<div class="container my-5 py-3 z-depth-1">
    <div class="container">
<form class="p-5">

    <p style="background-color:#fafafa; height:80px; padding-top:15px; font-weight:bold; font-size:40px; color:#ddb439;" class="h4 mb-4 text-center animated fadeIn slow">Admin Login</p>
    <?php echo @$error; ?>
    <input type="text" id="materialLoginFormEmail" name="adminid" class="form-control mb-4 animated fadeIn slower" placeholder="E-mail">

    <input type="password" id="materialLoginFormPassword" name="pass" class="form-control mb-4 animated fadeIn slower" placeholder="Password">

    <div class="d-flex justify-content-between">
        <div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
                <label class="custom-control-label animated fadeIn delay-1s" for="defaultLoginFormRemember"><b>Remember me</b></label>
            </div>
        </div>
        <div>
            <a href="" class="animated fadeIn delay-1s"><b>Forgot password?</b></a>
        </div>
    </div>

    <button style="background-color: #ddb439 !important;" name="login" class="btn btn-info btn-block my-4 animated fadeIn slower" type="submit">Log in</button>
</form>
</div>
</div>

<?php
  include('../footer.html')
  ?>

</body>
</html>