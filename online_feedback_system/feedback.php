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
    <title></title>
  </head>
  <body>
    <form action="feedback_db.php" method="post">
    <center><h3 style="color:blue;text-decoration:underline">Student's Feedback Form</h3></center>
    <h3>Please give your answer about the following question by circling the given grade on the scale:</h3>
    <button type="button" class="btn btn-success" style="background-color:green;">Strongly Agree 5</button>
    <button type="button" class="btn btn-secondary">Agree 4</button>
    <button type="button" class="btn btn-primary" style="background-color:darkblue;">Neutral 3</button>
    <button type="button" class="btn btn-secondary">Disagree 2</button>
    <button type="button" class="btn btn-danger" style="background-color:">Strongly Disagree 1</button>
    <table class="table table-bordered" style="margin-top:50px;">
      <tr>
        <th>Select Faculty</th>
        <td>
          <select name="faculty" class="form-control">

            <?php
            session_start();
            $user=$_SESSION["User"];
            $conn = mysqli_connect("localhost","jyoti","jyoti123","feedback_system");
          $sql=mysqli_query($conn,"SELECT * FROM faculty");
          while($list = mysqli_fetch_array($sql)){
            echo "<option value='".$list[3]."'>".$list[1]."</option>";
          }

             ?>
          </select>
        </td>
      </tr>
    </table>
    <h3>1-Course Material</h3>
    <table class="table table-bordered">
      <tr><td><b>1:</b> Teacher provided the course outline having weekly content plan with list of required text book.</td>
        <td>
          <input type="radio" name="ques1" value="5" />5
          <input type="radio" name="ques1" value="4" />4
          <input type="radio" name="ques1" value="3" />3
          <input type="radio" name="ques1" value="2" />2
          <input type="radio" name="ques1" value="1" />1

        </td>
      </tr>

      <tr><td><b>2:</b> Course objectives, learning outcomes and grading criteria are clear to me.</td>
        <td>
          <input type="radio" name="ques2" value="5" />5
          <input type="radio" name="ques2" value="4" />4
          <input type="radio" name="ques2" value="3" />3
          <input type="radio" name="ques2" value="2" />2
          <input type="radio" name="ques2" value="1" />1

        </td>
      </tr>

      <tr><td><b>3:</b> Course Integrates throretical course concepts with the real world examples.</td>
        <td>
          <input type="radio" name="ques3" value="5" />5
          <input type="radio" name="ques3" value="4" />4
          <input type="radio" name="ques3" value="3" />3
          <input type="radio" name="ques3" value="2" />2
          <input type="radio" name="ques3" value="1" />1

        </td>
      </tr>


    </table>

    <h3>2-Class Teaching</h3>
    <table class="table table-bordered">
      <tr><td><b>4:</b> Teacher is punctual, arrives on time and leaves on time.</td>
        <td>
          <input type="radio" name="ques4" value="5" />5
          <input type="radio" name="ques4" value="4" />4
          <input type="radio" name="ques4" value="3" />3
          <input type="radio" name="ques4" value="2" />2
          <input type="radio" name="ques4" value="1" />1

        </td>
      </tr>

      <tr><td><b>5:</b> Teacher is good at stimulating the interest in the course content.</td>
        <td>
          <input type="radio" name="ques5" value="5" />5
          <input type="radio" name="ques5" value="4" />4
          <input type="radio" name="ques5" value="3" />3
          <input type="radio" name="ques5" value="2" />2
          <input type="radio" name="ques5" value="1" />1

        </td>
      </tr>

      <tr><td><b>6:</b> Teacher is good at explaining the subject matter.</td>
        <td>
          <input type="radio" name="ques6" value="5" />5
          <input type="radio" name="ques6" value="4" />4
          <input type="radio" name="ques6" value="3" />3
          <input type="radio" name="ques6" value="2" />2
          <input type="radio" name="ques6" value="1" />1

        </td>
      </tr>

      <tr><td><b>7:</b> Teacher's presentation was clear, loud and easy to understand.</td>
        <td>
          <input type="radio" name="ques7" value="5" />5
          <input type="radio" name="ques7" value="4" />4
          <input type="radio" name="ques7" value="3" />3
          <input type="radio" name="ques7" value="2" />2
          <input type="radio" name="ques7" value="1" />1

        </td>
      </tr>

      <tr><td><b>8:</b> Teacher is good at using innovative teaching methods/ways.</td>
        <td>
          <input type="radio" name="ques8" value="5" />5
          <input type="radio" name="ques8" value="4" />4
          <input type="radio" name="ques8" value="3" />3
          <input type="radio" name="ques8" value="2" />2
          <input type="radio" name="ques8" value="1" />1

        </td>
      </tr>

      <tr><td><b>9:</b> Teacher is available and helpful during counseling hours.</td>
        <td>
          <input type="radio" name="ques9" value="5" />5
          <input type="radio" name="ques9" value="4" />4
          <input type="radio" name="ques9" value="3" />3
          <input type="radio" name="ques9" value="2" />2
          <input type="radio" name="ques9" value="1" />1

        </td>
      </tr>

      <tr><td><b>10:</b> Teacher has completed the whole course as per course outline.</td>
        <td>
          <input type="radio" name="ques10" value="5" />5
          <input type="radio" name="ques10" value="4" />4
          <input type="radio" name="ques10" value="3" />3
          <input type="radio" name="ques10" value="2" />2
          <input type="radio" name="ques10" value="1" />1

        </td>
      </tr>
</table>
<h3>3-Class Assessment</h3>
<table class="table table-bordered">
  <tr><td><b>11:</b> Teacher was always fair and impartial.</td>
    <td>
      <input type="radio" name="ques11" value="5" />5
      <input type="radio" name="ques11" value="4" />4
      <input type="radio" name="ques11" value="3" />3
      <input type="radio" name="ques11" value="2" />2
      <input type="radio" name="ques11" value="1" />1

    </td>
  </tr>

  <tr><td><b>12:</b> Assessments conducted are clearly connected to maximize learning objectives.</td>
    <td>
      <input type="radio" name="ques12" value="5" />5
      <input type="radio" name="ques12" value="4" />4
      <input type="radio" name="ques12" value="3" />3
      <input type="radio" name="ques12" value="2" />2
      <input type="radio" name="ques12" value="1" />1

    </td>
  </tr>

  <tr><td><b>13:</b> What I liked about the course.<br><br>
      <center><textarea name="ques13" rows="5" cols="60"></textarea></center>
    </td>
  </tr>

  <tr><td><b>14:</b> What I disliked about the course.<br><br>
        <center><textarea name="ques14" rows="5" cols="60"></textarea></center>
      </td>
  </tr>
</table>
<center><button type="submit" class="btn btn-success">Submit</button></center>
</form>
<div style="margin-top:50px;">
</div>

  </body>
</html>
