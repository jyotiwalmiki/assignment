<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
        <table border="5" class="table">
          <tr><td>Sr.No</td><td>Name</td><td>Email</td><td>Mobile</td><td>Programme</td><td>Semester</td><td>Delete</td></tr>
          <?php
          $con=mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
          $sql=mysqli_query($con,"select * from user");

          while($list = mysqli_fetch_array($sql)){
            echo "<tr><td>".$list['id']."</td><td>".$list['name']."</td><td>".$list['email']."</td><td>".$list['mobile']."</td><td>".$list['programme']."</td><td>".$list['semester']."</td><td><a href='delete.php?id=$list[0]'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
          }
          ?>
        </table>
      </body>
    </html>

  </body>
</html>
