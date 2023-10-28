<?php
include 'C:\xampp\htdocs\E-Library-master\backend\connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="../css/styles.css">
 <link rel="icon" type="image/x-icon" href=" \E-Library-master\images\DigiLib_colorful.png">
 <title>DigLib / Login </title>
</head>



<body>

    <center>
 <!-- main container -->
 <div class="container">
  <!-- form container -->
  <div class="form_container">
        <img src="\E-Library-master\images\DigiLib_colorful.png" width="170" height="40">
        <h2>ADMIN</h2><br />

        <form action="\E-Library-master\backend\admin.php" method="POST">
            <div class="email_cont">
            <i class="fa fa-envelope-o"></i>
            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
            </div><br />

            <div class="email_cont">
            <i class="fa fa-eye"></i>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required>
            </div><br /><br />
            
            <input type="submit" name="btn" value="Login" id="login_btn" /><br /><br />
            
         </form>
  </div>
 </div>

   </center>
 <!-- JS CDN -->
 <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
</body>

</html>s