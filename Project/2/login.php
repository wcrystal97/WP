<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<?php
	session_save_path("session");
	session_start();
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){//if user logined already at test.php but try to go to this page again without logout
		echo "Please log out first";   //echo warning, and auto direct to test.php after 2 second
		header("refresh:2;url=test.php");
		exit;
	}

	?>
	<div class="main-w3layouts wrapper">
		<h1>Login Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="login-submit.php" method="post">
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">		
					<input type="submit" value="LOGIN">
				</form>
				<p>Not registered? <a href="signup.php"> Create an account</a></p>
			</div>
		</div>

	</div>
</body>
</html>