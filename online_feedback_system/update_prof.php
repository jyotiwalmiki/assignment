<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container-fluid">
      <center><h1>Update your profile</h1></center>
    <table class="table">
  <thead>
    <form action="#" method="post">
  </thead>
  <tbody>
    <tr>
      <td>Enter Name</td>
      <td><input type="text" name="Name" maxlength="30" placeholder="Enter Name" class="form-control" required/></td>
    </tr>
    <tr>
      <td>Enter Email</td>
      <td><input type="text" name="Email_Id" maxlength="100" placeholder="Enter Email"class="form-control" required/></td>
    </tr>
    <tr>
      <td>Enter Your Password</td>
      <td><input type="password" name="Password" maxlength="100" placeholder="Enter Password"class="form-control" required/></td>
    </tr>
    <tr>
      <td>Enter Your Mobile</td>
      <td><input type="text" name="Mobile_Number" maxlength="10" placeholder="Enter Mobile No"class="form-control" required/></td>
    </tr>

    <tr>
    <td>Select Your Programme</td>
    <td ><select name="programme" >
    <option value="BCA">BCA</option>
    <option value="MCA">MCA</option>
    <option value="BTech">B-Tech</option>
    <option value="MSC">MSC</option>
  </select></td>
  </tr>
  <tr>
  <td>Select Your Semester</td>
  <td><select name="semester" >
  <option value="1">I</option>
  <option value="2">II</option>
  <option value="3">III</option>
  <option value="4">IV</option>
  <option value="5">V</option>
  <option value="6">VI</option>
  <option value="7">VII</option>
  <option value="8">VIII</option>

</select></td>
</tr>
    <tr>
    <td>Gender</td>
    <td>Male <input type="radio" name="Gender" value="Male" />
    Female <input type="radio" name="Gender" value="Female" /></td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td>Drawing
    <input type="checkbox" name="Hobby"  value="Drawing" />
    Singing
    <input type="checkbox" name="Hobby" value="Singing" />
    Dancing
    <input type="checkbox" name="Hobby" value="Dancing" />
    Sketching
    <input type="checkbox" name="Hobby"value="Sketching" />
  </tr>

  <tr>
  <td>Image</td>
  <td><input type="file" name="upload_file"  required/>
</tr>
  <tr>
    <td>DOB</td>
    <td><input type="date" id="birth" name="DOB"></td>
  </tr>

  <tr style="text-align:center;;">
    <td><button type="submit" class="btn btn-default" name="Submit" id="submit">Update my Profile</button>
    <button type="reset" class="btn btn-default" name="Reset" id="Reset">Reset</button></td>
  </tr>
  </tbody>
</form>
</table>
</div>
  </body>
</html>
