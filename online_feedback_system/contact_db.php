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

$fname=$_POST['name'];
$mobile=$_POST['mobile'];
$emailid=$_POST['email'];
$msg=$_POST['subject'];


$sql = "insert into contact(name,email,mobile,message) values('$fname','$emailid','$mobile','$msg')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Message Send Successfully!!!');
    window.location.href='#';
    </script>";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
