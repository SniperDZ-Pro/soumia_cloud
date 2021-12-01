<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Main</title>
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
					<h3>Main page</h3>
					<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenue sur notre site.</h1>
					
					<button type="submit" name="submit" id="submit">
						<span><a href="logout.php" class="btn btn-danger ml-3">Sign Out</a></span>
					</button>
                    
                    </br>
					
				</form>
				<img src="images/image-2.png" alt="" class="image-2">
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/main.js"></script>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>