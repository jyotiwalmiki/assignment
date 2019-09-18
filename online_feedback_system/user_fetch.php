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
$emailid=$_POST['Email_Id'];
$password=$_POST['Password'];
$mobile=$_POST['Mobile_Number'];
$programme=$_POST['programme'];
$sem=$_POST['semester'];
$gender=$_POST['Gender'];
$hobbies=$_POST['Hobby'];
$image=$_POST['upload_file'];
$dob=$_POST['DOB'];

$sql = "insert into user(name,email,pass,mobile,programme,semester,gender,hobbies,image,dob) values('$fname','$emailid','$password','$mobile','$programme','$sem','$gender','$hobbies','$image','$dob')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Successfully Registered For Website!!!');
    window.location.href='index.php?opt=login';
    </script>";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
