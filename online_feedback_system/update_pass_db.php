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
$old1 = $_POST['old'];
$newpas = $_POST['new'];
$Email=$_SESSION["User"];
$sql="select * from user where email='$Email' and pass='$old1'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)==1){
  $sqlupd="update user set pass='$newpas' where email='$Email'";
  if(mysqli_query($conn,$sqlupd)){
    echo "<script>
    alert('Password Updated Successfully...');
    window.location.href='#';
    </script>";
  }
  else {
    echo "<script>
    alert('Something Went Wrong Try Again...');
    window.location.href='#';
    </script>";
  }
}
  else {
    echo "<script>
    alert('Invalid Password Entered...');
    window.location.href='#';
    </script>";
  }
?>
