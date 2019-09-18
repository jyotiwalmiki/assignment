        <div class="table-responsive">
        <table border="2" class="table" style="font-size:15 px;">
          <tr><td>Sr.No</td><td>Student</td><td>Teacher</td><td>Quest1</td><td>Quest2</td><td>Quest3</td><td>Quest4</td><td>Quest5</td><td>Quest6</td><td>Quest7</td><td>Quest8</td><td>Quest9</td><td>Quest10</td><td>Quest11</td><td>Quest12</td><td>Quest13</td><td>Quest14</td></tr>
          <?php
          $con=mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
          $sql=mysqli_query($con,"select * from feedback");

          while($list = mysqli_fetch_array($sql)){
            echo "<tr><td>".$list[0]."</td><td>".$list[1]."</td><td>".$list[2]."</td><td>".$list[3]."</td><td>".$list[4]."</td><td>".$list[5]."</td><td>".$list[6]."</td><td>".$list[7]."</td><td>".$list[8]."</td><td>".$list[9]."</td><td>".$list[10]."</td><td>".$list[11]."</td><td>".$list[12]."</td><td>".$list[13]."</td><td>".$list[14]."</td><td>".$list[15]."</td><td>".$list[16]."</td></tr>";
          }
          ?>
        </table>
        </div>
