<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Login Page</title>
    
    <style>
    .divpass{
      padding-left: 10%;
    }
    </style>
  </head>
  <body>
    <div class="container">
    <div class="divpass" >
      <h2>Admin Login Form</h2><br>
      <form action="admin/login_php.php" method="post">

    	<div class="row">
    	<div class="col-sm-3">
        <label>Enter Your Email</label>
      </div>
      <div class="col-sm-5">
        <input type="email" name="email" class="form-control" required>
      </div>
    </div><br>
        <div class="row">
      	<div class="col-sm-3">
          <label>Enter Your Password</label>
        </div>
        <div class="col-sm-5">
          <input type="password" name="pass" class="form-control">
        </div>
      </div>
</div>
</div><br><br>
        <center><button type="submit" class="btn btn-success" name="Submit" id="submit">Login</button></center>
    </form>
  </body>
</html>
