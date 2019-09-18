<?php
$servername = "localhost";
$username = "jyoti";
$password = "jyoti123";
$dbname = "feedback_system";

$id=$_GET['id'];
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql=mysqli_query($conn,"delete from user where id='$id'");
