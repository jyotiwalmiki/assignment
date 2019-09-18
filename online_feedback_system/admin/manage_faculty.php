<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <table border="2" class="table" style="font-size:15px;">
          <tr><td>Sr.No</td><td>Name</td><td>Designation</td><td>Programme</td><td>Semester</td><td>Email</td><td>Mobile</td><td>Password</td><td>Delete</td><td>Update</td><td>Status</td></tr>
          <?php
          $con=mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
          $sql=mysqli_query($con,"select * from faculty");

          while($list = mysqli_fetch_array($sql)){
            echo "<tr><td>".$list['id']."</td><td>".$list['name']."</td><td>".$list['designation']."</td><td>".$list['programme']."</td><td>".$list['semester']."</td><td>".$list['email']."</td><td>".$list['mobile']."</td><td>".$list['pass']."</td><td><a href='delete_faculty.php?id=$list[0]'><i class='fa fa-trash' aria-hidden='true'></i></a></td><td><a href='update_faculty.php?id=$list[0]'><i class='fa fa-pencil' style='font-size:24px'></i></a></td><td><a href='status.php?id=$list[0]'><i class='fa fa-user' aria-hidden='true'></i></a></tr>";
          }
          ?>
        </table>

  </body>
</html>
