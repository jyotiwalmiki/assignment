<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
$sql=mysqli_query($con,"select * from faculty where id='$id'");
$list = mysqli_fetch_array($sql)

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Update Faculty Form</title>

  </head>
  <body>
      <div class="container-fluid" >
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <h2>Update Faculty</h2><br>
    <form action="update_faculty_php.php" method="post">

      <b>Name:</b>
      <input type="text" name="Name" maxlength="30" class="form-control" value="<?php echo $list['name']; ?>" required><br>
      <b>Designation:</b>
      <input type="text" name="designa" maxlength="30" class="form-control" value="<?php echo $list['designation']; ?>" required/><br>

      <b>Email:</b>
      <input type="text" name="Email_Id" maxlength="100"class="form-control" value="<?php echo $list['email']; ?>" required/><br>

      <b>Password:</b>
      <input type="password" name="Password" maxlength="100" class="form-control" value="<?php echo $list['pass']; ?>" required/><br>
      <b>Programme:</b>
      <input type="text" name="programme" maxlength="100"class="form-control" value="<?php echo $list['programme']; ?>" required/>
    <br>
  <b>Semester</b>
  <select name="semester" class="form-control" >
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  <option value="7">VII</option>
  <option value="8">VIII</option>
</select><br>
  <b>Mobile Number:</b>
  <input type="tel" name="Mobile_Number"class="form-control" value="<?php echo $list['mobile']; ?>"required/><br>

    <center><button type="submit" class="btn btn-success" name="Submit" id="submit">Update Faculty</button>
    </center>

</form>

</div>
</div>
</div>
  </body>
</html>
