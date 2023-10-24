<?php
include"connection.php";
include"navbar.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Information</title>
        <style type="text/css">
            .search
            {
                padding-left: 1000px;
            }
        </style>
    </head>
    <body>
        <!-- SEARCH BAR -->
        <div class="search">
            <form class="navbar-form" method="post" name="form1">
                
                    <input class="form-control" type="text" name="search" 
                    placeholder="Student Email Address..." required="">
                    <button style="background-color:  #0fa8dd;" type="submit" name="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"> </span>
                    </button>
             

            </form>
        </div>
        <h2>List Of Students</h2>
        <?php

            if(isset($_POST['submit']))
            {
                    $q=mysqli_query($db,"SELECT first,last,email,contact,roll FROM `student` where `email` like'%$_POST[search]%' ");
                   
                    if(mysqli_num_rows($q)==0)
                    {
                        echo "Sorry!No student found with that email address. Try searching again.";
                    }
                    else
                    {
                        echo "<table class='table table-bordered table-hover'>";
                        echo "<tr style='background-color: #0fa8dd;'>";
                //table header
                            echo "<th>"; echo"First Name";  echo "</th>";
                            echo "<th>"; echo"Last Name";  echo "</th>";
                            echo "<th>"; echo"Email Address";  echo "</th>";
                            echo "<th>"; echo"Contact";  echo "</th>";
                            echo "<th>"; echo"Roll Number";  echo "</th>";
                             
                        echo "</tr>";
                           
                        while($row=mysqli_fetch_assoc($q))
                        {
                            echo"<tr>";
                            echo "<td>"; echo $row['first'];  echo "</td>";
                            echo "<td>"; echo $row['last'];  echo "</td>";
                            echo "<td>"; echo$row['email'];  echo "</td>";
                            echo "<td>"; echo$row['contact'];  echo "</td>";
                            echo "<td>"; echo$row['roll'];  echo "</td>";
                            echo"</tr>";
                        }
                        echo "</table>";
                    }
            }
                /*if button is not pressed*/
                else
                {
                    $res=mysqli_query($db,"SELECT first,last,email,contact,roll FROM `student`  ORDER BY `student`.`first` ASC;");
                    echo "<table class='table table-bordered table-hover'>";
                    echo "<tr style='background-color: #0fa8dd;'>";
            //table header
            echo "<th>"; echo"First Name";  echo "</th>";
            echo "<th>"; echo"Last Name";  echo "</th>";
            echo "<th>"; echo"Email Address";  echo "</th>";
            echo "<th>"; echo"Contact";  echo "</th>";
            echo "<th>"; echo"Roll Number";  echo "</th>";
             
                    echo "</tr>";
                       
                    while($row=mysqli_fetch_assoc($res))
                    {
                        echo"<tr>";
                        echo "<td>"; echo $row['first'];  echo "</td>";
                        echo "<td>"; echo $row['last'];  echo "</td>";
                        echo "<td>"; echo$row['email'];  echo "</td>";
                        echo "<td>"; echo$row['contact'];  echo "</td>";
                        echo "<td>"; echo$row['roll'];  echo "</td>";
                       
                        echo"</tr>";
                    }
                    echo "</table>";
                }

      
        ?>
    </body>
</html>