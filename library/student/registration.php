<?php
include"connection.php";
include"navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Student registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
     <!--so that if opened from a mobile  it will take the device size-->
   <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

            <!-- jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

            <!-- Latest compiled JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <style type="text/css">
        section
        {
            margin-top: -20px;
        }
    </style>
    </head>
    <body>
      
    <section>
        <div class="reg_image">
        <br><br>
        <div class="box2">
            <h1 style="text-align: center;font-size: 35px;font-family: lucida condole; color: #b6babd;">
                Library Management System</h1>
                <h1 style="text-align: center;font-size: 25px; color: #b6babd;">User Login Form</h1>
            <form name="Registration" action="" method="post" style="text-align: center;">
              <div class="login">
                    <input class="form-control" type="text" name="first" placeholder="First Name" required=""><br>
                    <input class="form-control" type="text" name="last" placeholder="Last Name" required=""><br>
                    <input class="form-control" type="password" name="password" placeholder="Password" required=""><br>
                    <input class="form-control" type="text" name="email" placeholder="Email Address" required=""><br>
                    <input class="form-control" type="text" name="contact" placeholder="Phone number" required=""><br>
                    <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
                    
                    <input class="btn btn-danger" type="submit" name="Submit" value="Sign Up"
                    style="color: black; width: 70px; height: 30px;">
                </div> 
                
            </form> 
            
        </div>
    </div>
    </section>
    <?php
    if(isset($_POST['Submit']))
    {
        $count=0;
        $sql="SELECT email FROM `student`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
            if($row['email']==$_POST['email'])
            {
                $count=$count+1;
            }
        }
      if($count==0)  
        {mysqli_query($db,"INSERT INTO `STUDENT` VALUES('$_POST[first]', '$_POST[last]', '$_POST[password]', '$_POST[email]', '$_POST[contact]','$_POST[roll]','anonymous.jpg');");
    ?>
    <script type="text/javascript">
        alert("Registration successful")
        window.location="index.php"
    </script>
    <?php
} 
    else
    {
        ?>
        <script type="text/javascript">
            alert("The Email Address is already in use.");
        </script>
        <?php
    }
    }
    
    ?>
</body>