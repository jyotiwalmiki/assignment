<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Online Feedback System</a>

  <ul class="navbar-nav ml-auto mt-2 mt-lg-0" >
    <li class="nav-item">
      <a class="nav-link" href="index.php"><span class="glyphicon glyphicon-home"></span> Home <span class="sr-only"></span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="index.php?opt=about"><span class="glyphicon glyphicon-user"></span> About</a>
    </li>
      <li>
      <a class="nav-link" href="index.php?opt=registration"><span class="glyphicon glyphicon-log-out"></span> Registration</a>
    </li>
    <li class="nav-item dropdown">
          <a href="index.php?opt=login" class="nav-link dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span>  Login</a>
          <div class="dropdown-menu">
              <a href="index.php?opt=login" class="dropdown-item">Student</a>
              <a href="index.php?opt=faculty_login" class="dropdown-item">Faculty</a>
              <a href="index.php?opt=admin_login" class="dropdown-item">Admin</a>
            </div>
      </li>

    <li class="nav-item">
      <a class="nav-link" href="index.php?opt=contact"><span class="glyphicon glyphicon-earphone"></span> Contact</a>
    </li>
  </ul>
</nav>

<?php
  @$url=$_GET['opt'];
  if($url!=""){
    if($url=="home"){
      include('home.php');
    }
    else if($url=="about"){
      include('about_us.php');
    }
    else if($url=="registration"){
      include('registration.php');
    }
    else if($url=="login"){
      include('login.php');
    }
    else if($url=="contact"){
      include('contact.php');
    }
    else if($url=="faculty_login"){
	include('faculty/login.php');
  }
else if($url=="admin_login"){
	include('admin/login.php');
}}
  else{
    ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://media0.giphy.com/media/13JFX7aGo30CE8/source.gif" alt="First slide" style="width:100%; height:300px;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="https://media.giphy.com/media/fkStPRwttwYKY/giphy.gif" alt="Second slide"style="width:100%; height:300px;">

      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="http://jbic.co.in/images/demo/feedback.gif" alt="Third slide"style="width:100%; height:300px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h2>About Faculty Feedback System</h2>
        <p>Student Feedback System for college students have been developed which aims to rate and analyse the college faculty’s performance.

  This type of Student Feedback system reduces, the strenuous work of physically examining the feedback pages of each and every student.

  The system also reduces the burden of efforts and burden of keeping and maintaining the records on a manual base, it requires a lot of space and safety to keep up such records.

  Also the students feedbacks can be tempered for wrong reasons in case of paper based feedbacks wherein the SFS will always ensure safety of feedbacks privacy.

  Another important features of the SFS is that physical presence of neither the admin nor the student is required for the either giving the feedback nor for assessing the feedback.

  Also further enhancement can be done and more features can be added for better retrieval of the feedback details.</p>
    </div>
  </div>
  </div>

    <?php
    }
       ?>
<footer style="background-color:black ;color:white;text-align:center;width:100%;left:0;bottom:0;position:fixed;padding:0.8%;">Developed by &copy;  Jyoti Valmiki</footer>
</body>
</html>
