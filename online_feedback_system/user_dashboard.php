<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
    .menu{
      background-color: lightgrey;
      padding: 0%;
      max-height:100%;

    }
    .menu a{
      font-size: 20px;
      margin-left: 10px;
    }
    .blue-box{
      background-color: blue;
      padding: 1%;
      color: white;
      padding-left: 50px;
      height: 35px;
      font-size:20px;
    }
    .footer{
      background-color: black;
      color: white;
      text-align: center;
      padding: 1%;
    }
    </style>

  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <?php
    if($_SESSION["User"]!=null){
      // $usermail=$_SESSION["User"];
      $servername = "localhost";
      $username = "jyoti";
      $password = "jyoti123";
      $dbname = "notice_board";
      $email=$_SESSION["User"];
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      $sql="SELECT name FROM user WHERE email='$email'";
      $result = mysqli_query($conn,$sql);
      echo "<a class='navbar-brand' href='#'>".$email."</a>";
    }
     ?>
    <a class="navbar-brand" href="#"></a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="margin-left:70%;">
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-log-out" style="font-size:22px;"></span> Logout</a>
      </li>
    </ul>
  </nav>
<div class="container-fluid">
  <div class="row">
    <div class="menu col-sm-2">
      <div class="blue-box">Dashboard
  <head>
      </div><br>
      <img src="https://previews.123rf.com/images/tanyastock/tanyastock1803/tanyastock180300490/97923644-user-icon-avatar-login-sign-circle-button-with-soft-color-gradient-background-vector-.jpg" height="150" class="rounded-circle" alt=""><br><br>

      <a href="user_dashboard.php?href=updatepassword" class="nav-link"><span class="glyphicon glyphicon-user"></span>Update Password</a>
      <a href="user_dashboard.php?href=updateprofile" class="nav-link"><span class="glyphicon glyphicon-user"></span> Update Profile</a>
      <a href="user_dashboard.php?href=feedback" class="nav-link"><span class="glyphicon glyphicon-comment"></span> Feedback</a>
    </div>
    <div class="col-sm-10">
      <?php
      @$url=$_GET['href'];
      if($url!=""){
        if($url=="updatepassword"){
          include('update_pass_design.php');
        }
        else if($url=="updateprofile"){
          include('update_prof.php');
        }
        else if($url=="feedback"){
          include('feedback.php');
        }
      }
      else{
        echo "<h1>Welcome to user Dashboard</h1>";
        ?>
        <div class="row">
        <div class="col-sm-3">
        <img src="kartikaaryan.jpg" class="rounded-circle" style="width:200px;height:200px;"></img>
        <p><center>Label</center></p>
        <p><center>Something Else</center></p>
      </div>
      <div class="col-sm-3">
        <img src="iron.jpg" class="rounded-circle" style="width:200px;height:200px;"></img>
        <p><center>Label</center></p>
        <p><center>Something Else</center></p>
      </div>

      <div class="col-sm-3">
        <img src="num.jpg" class="rounded-circle" style="width:200px;height:200px;"></img>
       <p><center>Label</center></p>
        <p><center>Something Else</center></p>
      </div>

      <div class="col-sm-3">
        <img src="space.png" class="rounded-circle" style="width:200px;height:200px;"></img>
        <p><center>Label</center></p>
        <p><center>Something Else</center></p>
      </div>

 </div>
 <?php
  }
  ?>
</div>
      
  </div>
</div>
</div>
<div class="footer">&copy; All rights reserved...</div>
</body>
</html>
