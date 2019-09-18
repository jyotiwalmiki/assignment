<?php
session_start();
$servername = "localhost";
$username = "jyoti";
$password = "jyoti123";
$dbname = "feedback_system";


$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=(int)'';
$user = $_SESSION["User"];
$teacher=$_POST['faculty'];
$que1=$_POST['ques1'];
$que2=$_POST['ques2'];
$que3=$_POST['ques3'];
$que4=$_POST['ques4'];
$que5=$_POST['ques5'];
$que6=$_POST['ques6'];
$que7=$_POST['ques7'];
$que8=$_POST['ques8'];
$que9=$_POST['ques9'];
$que10=$_POST['ques10'];
$que11=$_POST['ques11'];
$que12=$_POST['ques12'];
$que13=$_POST['ques13'];
$que14=$_POST['ques14'];
$sql="insert into feedback values($id,'$user','$teacher','$que1','$que2','$que3','$que4','$que5','$que6','$que7','$que8','$que9','$que10','$que11','$que12','$que13','$que14',now())";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Your Feedback is Successfully Submitted!!!');
    window.location.href='user_dashboard.php?href=feedback';
    </script>";
} else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

 ?>
