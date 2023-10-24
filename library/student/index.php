<?php
    session_start()
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Online Library Management System
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
     <!--so that if openned from a mobile  it will take the device size-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <style type="text/css">
        nav
{
    float: right;
    word-spacing: 30px;
    padding: 20px;
}
nav li
{
    display: inline-block;
    line-height: 80px;
}
    </style>
    </head>
            <style type="text/css">

             </style>
        <body style="background-color: black;">
            <div class="mySlides w3-animate" scr=""></div>


        <div class="wrapper">
         <header>
            <div class="logo">
            <img src="images/logo" alt="">
        <h1 style="color: white;font-size: 25px;">Online Library Management System</h1>
    </div>

                <?php
                    if(isset($_SESSION['login_user']))
                    {?> 
                        <nav>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="books.php">Books </a></li>
                            <li><a href="Logout.php">Logout </a></li>
                            <li><a href="feedback.php">feedback </a> </li>   
                        </ul>
                    </nav>
                    <?php
                    }
                    else
                {?>
                     <nav>
                        <ul>
                            <li><a href="index.php">Home</a> </li>
                            <li><a href="books.php">Books </a></li>
                            <li><a href="Student-login.php">Student-Login </a></li>
              
                            <li><a href="registration.php">Registration</a> </li>
                            <li><a href="feedback.php">feedback </a> </li>   
                        </ul>
                    </nav>
                   <?php 
                   }
                ?>

                  
             </header>
             <section>
                <div class="sec_image">
                <br><br><br>
                <div class="box">
                    <br>
                    <h1 style="text-align: center;font-size: 35px;">Welcome To The Library</h1>
                    <h1 style="text-align: center;font-size: 25px;">Opens at  8:00am</h1>
                    <h1 style="text-align: center;font-size: 25px">Closes at 6:00pm</h1><br>
                </div>
            </div>
             </section>
              
      </div>
      <?php
      include "footer.php";
      ?>
    </body>
</html>