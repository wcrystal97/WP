<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
	
<link href="test.css" rel="stylesheet">
<body>

	<div class="instruction">
		<p>
	<?php
	session_save_path("session");
	session_start();
	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){//if user logined already but try to go to this page again, it will auto direct to test page.
		header("location: test.php");
		exit;
	}
	$username = $password = "";
	$username_err = $password_err = "";
	if(empty(trim($_POST["username"]))){//check if username value is empty
		$username_err = "Please enter username.";
	} else{
		$username = trim($_POST["username"]);
	}
	if(empty(trim($_POST["password"]))){//check if password value is empty
		$password_err = "Please enter your password.";
	} else{
		$password = trim($_POST["password"]);
	}
	if(empty($username_err) && empty($password_err)){//if no error on username and password, 
		$textFile = file_get_contents("user.txt");//pull out the user info from user.txt
		$each_user= (explode("\n", $textFile));
		for($i=0; $i<count($each_user); $i++){//search line by line
			$userinfo=(explode(",", $each_user[$i]));
			if($userinfo[0]==$username && $userinfo[4]==$password){//to check is user name found in our database, and the password is match
				session_start();
				$_SESSION["loggedin"] = true; //if all info match, it will store loggedin value as true in session
				$_SESSION["username"] = $username;//store username info too in session on key "username"
				header("location: test.php");//and direct to test.php 
				exit();//and finish this program.

			}else//if the user info not match, the loggedin value on session will be false
			$_SESSION["loggedin"] = false;

		}
		echo "<h1> Invalid login name or password</h1>";//echo the error message and provide the login page for user to re-login
			unset($_SESSION);
			echo "<a href='"."login.php"."'>
			Back to login page
			</a>";
			exit();
	}


	?>
		</p>
	</div>
</body>
</html>