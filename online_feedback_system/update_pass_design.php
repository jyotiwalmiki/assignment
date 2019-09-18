<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="divpass">
      <h2>Update Password</h2><br>
      <form action="update_pass_db.php" method="post">

    	<div class="row">
    	<div class="col-sm-3">
        <label>Enter Your Old</label>
      </div>
      <div class="col-sm-5">
        <input type="password" name="old" class="form-control" required>
      </div>
    </div>
        <div class="row">
      	<div class="col-sm-3">
          <label>Enter Your New Password</label>
        </div>
        <div class="col-sm-5">
          <input type="password" name="new" class="form-control">
        </div>
      </div>

      <div class="row">
    	<div class="col-sm-3">
        <label>Enter Your Confirm Password</label>
      </div>
      <div class="col-sm-5">
        <input type="password" name="confirm" class="form-control" required><br>
      </div>
    </div>
    </div>
        <center><button type="submit" class="btn btn-success" name="Submit" id="submit">Update Password</button>
        <button type="reset" class="btn btn-success" name="Reset" id="reset">Reset</button></center>
    </form>
    </body>
  </body>
</html>
