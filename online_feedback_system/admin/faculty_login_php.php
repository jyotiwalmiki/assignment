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

$fname=$_POST['Name'];
$desig=$_POST['designation'];
$emailid=$_POST['Email_Id'];
$password=$_POST['Password'];
$programme=$_POST['programme'];
$sem=$_POST['semester'];
$mobile=$_POST['Mobile_Number'];
$sql = "insert into faculty(name,designation,email,pass,programme,semester,mobile) values('$fname','$desig','$emailid','$password','$programme','$sem','$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Faculty Added Successfully!!!');
    window.location.href='#';
    </script>";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
