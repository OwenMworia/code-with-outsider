<?php
	include "navbar.php";
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>edit profile</title>
	<style type="text/css">
		.form-control
		{
			width:250px;
			height: 38px;
		}
		.form1
		{
			margin:0 540px;
		}
		label
		{
			color: white;
		}

	</style>
</head>
<body style="background-color: #2b383382;">

	<h2 style="text-align: center;color: black;">Edit Information</h2>
	<?php
		
		$sql = "SELECT * FROM student WHERE email='$_SESSION[login_user]'";
		$result = mysqli_query($db,$sql) or die (mysql_error());

		while ($row = mysqli_fetch_assoc($result)) 
		{
			$first=$row['first'];
			$last=$row['last'];
            $email=$row['email'];
			$password=$row['password'];
			$contact=$row['contact'];
		}

	?>

	<div class="profile_info" style="text-align: center;">
		<span style="color: black;">Welcome,</span>	
		<h4 style="color: black;"><?php echo $_SESSION['login_user']; ?></h4>
	</div><br><br>
	
	<div class="form1" >
		<form action="" method="post" enctype="multipart/form-data">

		<input class="form-control" type="file" name="file">

		<label><h4><b style="color: black;">First Name: </b></h4></label>
		<input class="form-control" type="text" name="first" value="<?php echo $first; ?>">

		<label><h4><b style="color: black;">Last Name</b></h4></label>
		<input class="form-control" type="text" name="last" value="<?php echo $last; ?>">

        <label><h4><b style="color: black;">Email</b></h4></label>
		<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">

		<label><h4><b style="color: black;">Password</b></h4></label>
		<input class="form-control" type="text" name="password" value="<?php echo $password; ?>">

		<label><h4><b style="color: black;">Contact No</b></h4></label>
		<input class="form-control" type="text" name="contact" value="<?php echo $contact; ?>">

		<br>
		<div style="padding-left: 100px;">
			<button class="btn btn-default" type="submit" name="submit">save</button></div>
	</form>
</div>
	<?php 

		if(isset($_POST['submit']))
		{
			move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']);

			$first=$_POST['first'];
			$last=$_POST['last'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$contact=$_POST['contact'];
			$pic=$_FILES['file']['name'];

			$sql1= "UPDATE student SET pic='$pic', first='$first', last='$last', email='$email', password='$password',  contact='$contact' WHERE email='".$_SESSION['login_user']."';";

			if(mysqli_query($db,$sql1))
			{
				?>
					<script type="text/javascript">
						alert("Saved Successfully.");
						window.location="profile.php";
					</script>
				<?php
			}
		}
 	?>
</body>
</html>
