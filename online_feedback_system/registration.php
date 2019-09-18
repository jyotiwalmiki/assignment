<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;


}
th, td {
  padding: 10px;
  text-align: left;
}
</style>
  </head>
  <body>
      <div class="container-fluid" >
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <h2>Registration Form</h2>
    <form action="user_fetch.php" method="post">

      <center><table class="table">

  <tbody >

    <tr>
      <th>Enter Your Name</th>
      <th><input type="text" name="Name" maxlength="30" placeholder="Enter Name" class="form-control" required/></th>
    </tr>
    <tr>
      <th>Enter Your Email</th>
      <th><input type="text" name="Email_Id" maxlength="100" placeholder="Enter Email"class="form-control" required/></th>
    </tr>
    <tr>
      <th>Enter Your Password</th>
      <th><input type="password" name="Password" maxlength="100" placeholder="Enter Password"class="form-control" required/></th>
    </tr>
    <tr>
      <th>Enter Your Mobile</th>
      <th><input type="text" name="Mobile_Number" maxlength="10" placeholder="Enter Mobile No"class="form-control" required/></th>
    </tr>
    <tr>
    <th>Select Your Programme</th>
    <th ><select name="programme" >
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="BTech">B-Tech</option>
    <option value="MSC">MSC</option>
  </select></th>
  </tr>
  <tr>
  <th>Select Your Semester</th>
  <th><select name="semester" >
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  <option value="7">VII</option>
  <option value="8">VIII</option>

</select></th>
</tr>

    <tr>
    <th>Select Your Gender</th>
    <th>Male <input type="radio" name="Gender" value="Male" />
    Female <input type="radio" name="Gender" value="Female" /></th>
  </tr>
  <tr>
    <th>Select Your Hobbies</th>
    <th>Drawing
    <input type="checkbox" name="Hobby"  value="Drawing" />
    Singing
    <input type="checkbox" name="Hobby" value="Singing" />
    Dancing
    <input type="checkbox" name="Hobby" value="Dancing" />
    Sketching
    <input type="checkbox" name="Hobby"value="Sketching" />
  </th>
  </tr>

  <tr>
  <th>Upload Your Image</th>
  <th><input type="file" name="upload_file"  required/></th>
</tr>
  <tr>
    <th>Enter Your DOB</th>
    <th><input type="date" name="DOB"></th>
  </tr>
  <tr>

  <tr>
    <th colspan="2"><center><button type="submit" class="btn btn-success" name="Submit" id="submit">Submit</button>
    <button type="reset" class="btn btn-primary" name="Reset" id="Reset">Reset</button></center></th>
  </tr>
  </tbody>
</form>
</center>
</table>
</div>
</div>
</div>
  </body>
</html>
