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
$fname=$_POST['Name'];
$email=$_SESSION["User"];
$password=$_POST['Password'];
$mobile=$_POST['Mobile_Number'];
$programme=$_POST['programme'];
$semeseter=$_POST['semester'];
$gender=$_POST['Gender'];
$hobbies=$_POST['Hobby'];
$image=$_POST['upload_file'];
$dob=$_POST['DOB'];


$sql = "UPDATE user SET name='$fname',pass='$password',image='$image',mobile='$mobile',gender='$gender',hobbies='$hobbies',dob='$dob' where email='$email'";
if (mysqli_query($conn, $sql)){
    echo "<script>alert('Successfully profile update!!!');
    </script>";
} else {
  echo "<script>alert('Error');
  </script>";
}
?>
