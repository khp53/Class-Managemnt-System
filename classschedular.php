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
  
  <style>
    select {
        min-width:220px;
        width: 250px;
    }
    select:focus {
        min-width: 250px;
        width: auto;
    }

    .break{
        background-color: gray;
    }

    .design{
        background-color: #6b97ff;
        text-align: center;
    }

    .col1{
        background-color: #99b3ff;
        
    }
  </style>
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
                <a href="#" style="color:black"><b>/ Class Schedular</b></a>&ensp;
              </div>
            </div>
          </div>
        </div>
        </footer>
        <br>
        <br>
        <div class="container">
        <h1>Class Schedular</h2>
        <hr>
        <br>
        <h4><b>Student Name: </b><?php echo $result['name']; ?></h4>
        <h4><b>UTMID: </b><?php echo $result['utmid']; ?></h4>
        <table>
          <tr>
              <td>
                <h4><b>Email: </b>example@graduate.utm.my&ensp;</h4>
            </td>
            <td>
                <h4><b>&ensp;Semester: </b>5/8</h4>
            </td>
          </tr>
        </table>
    </div>
    <br>
    <div class="container" id="printableArea">
    <table class="table table-bordered table-hover">
    <thead class="design">
        <tr>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Date</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Sun</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Mon</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Tue</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Wed</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Thu</th>
        <th style="font-size: 18px; font-weight: bold;" scope="col">Time</th>
        </tr>
    </thead>
    <tbody>
    <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='2' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">8.00 - 8.50</th>
        <td>
        <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>2</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='3' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">9.00 - 9.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>3</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='4' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">10.00 - 10.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>4</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='5' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">11.00 - 11.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>5</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='6' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">12.00 - 12.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>6</td>
        </tr>
        
        <tr class="break">
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='8' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">02.00 - 02.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>8</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='9' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">03.00 - 03.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>9</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='10' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">04.00 - 04.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>10</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='11' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">05.00 - 05.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>11</td>
        </tr>
        <?php
       $sql= mysqli_query($con,"select co.*, ca.* from courses_offered co, create_account ca where time='12' AND utmid='$utmid' ");
       $result=mysqli_fetch_assoc($sql);
    ?>
        <tr>
        <th class="col1" scope="row">06.00 - 06.50</th>
        <td>
        <div  class = "box">
        <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course1">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div>
        </td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course2">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course3">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o7'];?></option>
               <option value = "3"><?php echo $result['course_o8'];?></option>
               <option value = "4"><?php echo $result['course_o9'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course4">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o1'];?></option>
               <option value = "3"><?php echo $result['course_o2'];?></option>
               <option value = "4"><?php echo $result['course_o3'];?></option>
             </select>
             </div></td>
        <td> <div  class = "box">
             <select onchange="this.options[this.selectedIndex].setAttribute('selected','selected');" name="course5">
               <option value = "1"></option>
               <option value = "2"><?php echo $result['course_o4'];?></option>
               <option value = "3"><?php echo $result['course_o5'];?></option>
               <option value = "4"><?php echo $result['course_o6'];?></option>
             </select>
             </div></td>
        <td>12</td>
        </tr>
    </tbody>
    </table>
</div>
  <div class="container">
  <input class="btn btn-primary" type="button" onclick="printDiv('printableArea')" value="Print Schedule" />
  </div>
  <script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>

<br>
<?php
    include('footer.html')
    ?>
</html>