<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table class="table table-bordered" style="margin-top:15px;">
      <tr>
        <th>Select Faculty</th>
        <td>
          <select name="faculty" class="form-control">

            <?php
          $conn = mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
          $sql=mysqli_query($conn,"SELECT * FROM faculty");
          while($list = mysqli_fetch_array($sql)){
            echo "<option value='".$list[3]."'>".$list[1]."</option>";
          }

             ?>
          </select>

        </td>
        <td>
          <button type="submit" class="btn btn-success">Check Average</button>
        </td>
      </tr>

    </table>
    <hr style="border-top: 2px solid red;"></hr>
    <?php
    $servername = "localhost";
    $username = "jyoti";
    $password = "jyoti123";
    $dbname = "feedback_system";


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $fac=$_GET['faculty'];



     ?>
  </body>
</html>
