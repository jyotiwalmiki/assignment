<?php


$link = mysqli_connect('localhost','jyoti','jyoti123');
$database = mysqli_select_db($link,'feedback_system');

$user = $_POST['email'];
$pass = $_POST['pass'];
    $query = "SELECT * FROM user WHERE email ='$user' AND pass ='$pass'";
    $result = mysqli_query($link,$query);
    if (mysqli_num_rows($result) == 1){
      session_start();
      $_SESSION["User"]=$user;
        echo "<script>alert('Login Successful');
          window.location.href='user_dashboard.php';
          </script>";
    }
    else
    {
        echo "<script>alert('Invalid Username and Password!!!');
        window.location.href='index.php?opt=login';
        </script>";
    }
?>
