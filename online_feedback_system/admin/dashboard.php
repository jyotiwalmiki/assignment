<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- New script -->
    <style media="screen">
    nav a{
      color: black;
      text-decoration: none !important;
    }
    .head1 h4{
      line-height:40px;
    }
    .sidenav{
      margin: 0;
      padding: 0;
      background-color: lightgrey;
      height:700px;
    }
    .collapse{
      background-color: green;
      border-bottom:1px solid black;
      margin: 0;
      padding:2%;
    }
    .collapse a{
      color: white;
      text-decoration: none;
      font-size: 15px;
    }
    .head1{
      background-color:black;
      color:white;
      height: 40px;
      text-align: center;
    }
    .list a{
      padding-left:15%;
      color: black;
    }
    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       background-color: black;
       color: white;
       text-align: center;
      padding: 1%;
         }
    </style>
  </head>
  <body>
        <nav class="navbar navbar-dark bg-dark">
          <?php
          session_start();
          $servername = "localhost";
          $username = "jyoti";
          $password = "jyoti123";
          $dbname = "feedback_system";

          // Create connection
          $conn = mysqli_connect($servername, $username, $password, $dbname);
          // Check connection
          if (!$conn) {
              die("Connection failed: " . mysqli_connect_error());
          }
          $user=$_SESSION["Admin"];
          $sql="select * from admin where user='$user'";
          $result=mysqli_query($conn,$sql);
          $row=mysqli_fetch_array($result);
          echo "<a class='navbar-brand' style='color:white;'>Hello, $row[1]</a>";
           ?>
          <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i></a>
          <div class="dropdown-menu dropdown-menu-right">
              <a href="dashboard.php?href=update_pass" class="dropdown-item">Update Password</a>
              <a href="logout.php" class="dropdown-item">Logout</a>
              
            </div>
      </li>
        </nav>
        <br>
    <div class="container-fluid">
      <div class="row">
        <div class="sidenav col-sm-2">
          <div class="head1">
            <h4><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</h4>
          </div>
          <br>
          <nav>
          <a data-toggle="collapse" href="#Faculty" role="button"><h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i> Faculty</h5></a>
            <div class="collapse" id="Faculty">
              <a href="dashboard.php?href=add_faculty">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i> ADD Faculty</a>
              <hr>
              <a href="dashboard.php?href=manage_faculty">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>  Manage Faculty</a>
          </div>
           <a data-toggle="collapse" href="#Student" role="button"><h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-user"></i> Student</h5></a>
            <div class="collapse" id="Student">
            <a href="dashboard.php?href=manage_student">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i>  Manage Student</a>
          </div>
            <a data-toggle="collapse" href="#Feedback" role="button"><h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-book" aria-hidden="true"></i>  Feedback</h5></a>
             <div class="collapse" id="Feedback">
             <a href="dashboard.php?href=manage_feedback">&nbsp;&nbsp;&nbsp;&nbsp;Feedback</a>
             <hr>
              <a href="dashboard.php?href=feedback_avg">&nbsp;&nbsp;&nbsp;&nbsp;Feedback Average</a>
             </div>
              <h5>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-eye" aria-hidden="true"></i> <a href="dashboard.php?href=contact_us">Contact us</a></h5>
          </nav>
        </div>
        <div class="col-sm-10">
          <br>
          <?php
          @$url=$_GET['href'];
          if ($url !="") {
            if ($url=="add_faculty") {
              include('add_faculty.php');
            }
            elseif ($url=="manage_faculty") {
              include('manage_faculty.php');
            }
            elseif ($url=="manage_student") {
                include('manage_student.php');
            }
            elseif ($url=="manage_feedback"){
              include('manage_feedback.php');
            }
            elseif ($url=="feedback_avg"){
              include('average_feedback.php');
            }
            elseif ($url=="contact_us"){
              include('contact_us.php');
            }
	    elseif ($url=="update_pass"){
		include('update_pass.php');
		}

            else{
              echo "";
            }
          }else {
            ?>
             <center><h2 style="color:blue;text-decoration:underline">ADMIN DASHBOARD</h2></center>
            <?php
            $servername = "localhost";
            $username = "jyoti";
            $password = "jyoti123";
            $dbname = "feedback_system";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $dbname);
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $studentq=mysqli_query($conn,"Select * from user");
            $studentr=mysqli_num_rows($studentq);
            echo "<span style='color:green;font-size:25px;'>Total Number of Student :$studentr</span><br>";
            $facultyd=mysqli_query($conn,"Select * from faculty");
            $facultyr=mysqli_num_rows($facultyd);
            echo "<span style='color:red;font-size:25px;'>Total Number of Faculty :$facultyr</span><br>";
            $feedback=mysqli_query($conn,"select * from feedback");
            $feedbackr=mysqli_num_rows($feedback);
            echo "<span style='color:blue;font-size:25px;'>Total Number of Feedback given by Students :$feedbackr</span>";
          }
            ?>
          </div>
      </div>
    </div>
    <div style="margin-top:40px;">
    </div>
    <div class="footer">
    <h5 style="color:white;">&copy; All the rights reserved </h5>
    </div>
  </body>
</html>

