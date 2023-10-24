<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
      <title>
        
      </title>
                    <link rel="stylesheet" type="text/css" href="style.css">
                    <meta charset="utf-8">
                <!--so that if opened from a mobile  it will take the device size-->
            <meta name="viewport" content="width=device-width, initial-scale=1">
                    <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
             <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
        <body>
        <nav class="navbar navbar-inverse">
         <div class="container-fluid">
         <div class="navbar-header" style="color:white ">
             <h3>Online Library Management System</h3>
                </div>
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="books.php">Books </a></li>
                           <li><a href="feedback.php">feedback </a> </li>   
                        </ul>

                        <?php
                         if(isset($_SESSION['login_user']))
                         { ?>
                            <ul class="nav navbar-nav">
                        <li><a href="profile.php">Profile</a></li>        
                        </ul>
                         <ul class="nav navbar-nav navbar-right">
                            <li><a href="">
                                <div style="color:white " >
                                <?php
                                echo "<img class='img-circle profile_img' height=30 width=30
                                src='images/". $_SESSION['pic']."' >";
                                
                                echo " ".$_SESSION['login_user']; 
                                 ?>
                                 </div> 
                              </a></li>
                            <li><a href="Logout.php"><span class="glyphicon glyphicon-log-out"> Logout</span>  </a></li>
                            <?php
                        }
                        else
                        {?>
                            <ul class="nav navbar-nav navbar-right">
                            <li><a href="Student-login.php"><span class="glyphicon glyphicon-log-in"> Student-Login</span> </a></li>
                            
                            <li><a href="registration.php"><span class="glyphicon glyphicon-user "> SignUp</span></a> </li>
                        </ul> 
                        <?php
                        }
                        ?>

                          
                    </div>
                    </nav>
    
        </body>
</html>