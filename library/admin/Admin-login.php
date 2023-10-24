<?php
  include "connection.php";
  include "navbar.php";
 
?>

<!DOCTYPE html>
<html>
<head>

  <title>Student Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
  <style type="text/css">
    section
    {
      margin-top: -20px;
    }
  </style>   
</head>
<body>

<section>
        <div class="log_image">
        <br><br>
        <div class="box1">
            <h1 style="text-align: center;font-size: 35px;font-family: lucida condole; color: #b6babd;">
                Library Management System</h1>
                <h1 style="text-align: center;font-size: 25px; color: #b6babd;">User Login Form</h1>
            <form name="Login" action="" method="post" style="text-align: center;">
                <div class="login">
                <input class="form-control" type="text" name="email" placeholder="Email address" required=""> <br>
                <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
                <input class="btn btn-primary" type="submit" name="submit" value="Login"
                 style="color: black; width: 70px; height: 30px;">
                
           
            <p style="color: white; padding-left: 7px;">
                <a style="color:white;" href="update_password.php">Forgot password?</a> &nbsp;&nbsp;&nbsp;&nbsp;
                New to this website?<a style="color:white;" href="registration.php">Sign Up</a>
            </p>
        </form> 
        </div>
    </div>
    </section>
  <?php

    if(isset($_POST['submit']))
    {
      $count=0;
      $res=mysqli_query($db,"SELECT * FROM `admin` WHERE email='$_POST[email]' && password='$_POST[password]';");
      $row=mysqli_fetch_assoc($res);
      $count=mysqli_num_rows($res);

      if($count==0)
      {
        ?>
            
              <script type="text/javascript">
                alert("The username and password doesn't match.");
              </script> 
              
            
        <?php
      }
      else
      {
        /*if email and password matches*/
       $_SESSION['login_user'] = $_POST['email'];
       $_SESSION['pic'] = $row ['pic'];    
          ?>
          <script type="text/javascript">
           window.location="index.php" 
          </script>
        <?php
      }
    }

  ?>

</body>
</html>