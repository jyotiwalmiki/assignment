<?php


$link = mysqli_connect('localhost','jyoti','jyoti123');
$database = mysqli_select_db($link,'feedback_system');

$user = $_POST['email'];
$pass = $_POST['pass'];
    $query = "SELECT * FROM admin WHERE user ='$user' AND pass ='$pass'";
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 1){
      session_start();
      $_SESSION["Admin"]=$user;
        echo "<script>alert('Login Successful');
          window.location.href='dashboard.php';
          </script>";
    }
    else
    {
        echo "<script>alert('Invalid Username and Password!!!');
        window.location.href='login.php';
        </script>";
    }
?>
