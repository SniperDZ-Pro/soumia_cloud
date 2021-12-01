<?php
$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){

require_once "config.php";  

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query( $link,"insert into users (fullname,username,password) values('$fullname','$username','$password')") or die(mysqli_error($link));

if($query){
    header("Location: index.php"); // Redirecting to other page
}

 mysqli_close($link); // Closing connection
 }
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method="POST" action="">
					<h3>New Account?</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="fullname" placeholder="Fullname">
					</div>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					
					<button type="submit" name="submit" id="submit">
						<span>Register</span>
					</button>
					</br>
					<div>
							<a href="index.php" >
							if you have an account?
							</a>
						</div>
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>