<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title></title>
  </head>
  <body>
    <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <h2>Contact Us</h2>
        <form action="contact_db.php" method="post">
          <label>Name:</label><br>
          <input type="text" name="name" class="form-control" required>
          <label>Mobile Number:</label><br>
          <input type="text" name="mobile" class="form-control" required>
          <label>Email Address:</label><br>
          <input type="email" name="email" class="form-control" required>
          <label>Message:</label>
          <textarea id="subject" name="subject" placeholder="Write Something..." class="form-control" style="height:170px;"></textarea><br><br>
          <center><button type="submit" class="btn btn-success" id="submit" name="Submit">Send Message</button></center>
        </div>


        <div class="col-sm-4">
          <h2>Contact Details</h2>
          <p>E-20 Sector 63</p>
          <p>Noida, India 90210</p>
          <span class="glyphicon glyphicon-earphone" style="font-size:20px;"></span> <abbr title="Phone">P</abbr> : +91 8898378180<br>
          <span class="glyphicon glyphicon-envelope" style="font-size:20px;"></span> <abbr title="Phone">E</abbr> : jyotiwalmiki123@gmail.com<br>
          <span class="glyphicon glyphicon-home" style="font-size:20px;"></span> <abbr title="Phone">H</abbr> Monday- Sunday:9:00 AM to 9:00 PM<br>
          <div class="icon-bar">
            <a href="#" class="facebook"><i class="fa fa-facebook" style="font-size:20px;"></i></a>&nbsp;&nbsp;
             <a href="#" class="linkedin"><i class="fa fa-linkedin" style="font-size:20px;"></i></a>&nbsp;&nbsp;
              <a href="#" class="twitter"><i class="fa fa-twitter" style="font-size:20px;"></i></a>&nbsp;&nbsp;
                <a href="#" class="google"><i class="fa fa-google" style="font-size:20px;"></i></a>

          </div>


  </body>
</html>
