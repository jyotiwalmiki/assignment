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
$name=$_POST['Name'];
$des=$_POST['designation'];
$email=$_POST['Email_Id'];
$passw=$_POST['Password'];
$prog=$_POST['programme'];
$sem=$_POST['semester'];
$mob=$_POST['Mobile_Number'];
$sql1="update faculty set name='$name',designation='$des',email='$email',pass='$passw',programme='$prog',semester='$sem',mobile='$mob' where name='$name'";
if(mysqli_query($conn,$sql1)){
    echo "<script>
    alert('Faculty Updated Successfully...');
    window.location.href='#';
    </script>";
  }
  else{
    echo "<script>
    alert('Please Try Again...');
    </script>";
  }
?>
