<?php
$error=''; //Variable to Store error message;
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Wrong password or username ..!";
 }
 else
 {
 // Include config file
  require_once "config.php";    
 //Define $user and $pass
 $user=$_POST['username'];
 $pass=$_POST['password'];
 

 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($link, "SELECT * FROM users WHERE password='$pass' AND username='$user' ");
 $_SESSION['username'] = $user;
  
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 session_start();
     //$id = $row["id"];
     //$_SESSION["id"] = $id;
	 $_SESSION['username'] = $user;
 header("Location: main2.php"); // Redirecting to other page
 }
 
 else
 {
 $error = "Wrong password or username ..!";
 }
 mysqli_close($link); // Closing connection
 }
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- LINEARICONS -->
		<link rel="stylesheet" href="fonts/linearicons/style.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<img src="images/image-1.png" alt="" class="image-1">
				<form method="POST" action="">
					<h3>Login</h3>
					<div class="form-holder">
						<span class="lnr lnr-user"></span>
						<input type="text" class="form-control" name="username" placeholder="Username">
					</div>
					
					
					<div class="form-holder">
						<span class="lnr lnr-lock"></span>
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					
					<button type="submit" name="submit" id="submit">
						<span>Login</span>
					</button>
                    </br>
					<div>
							<a href="register.php" >
							Don't have an account?
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