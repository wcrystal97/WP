<!DOCTYPE html>
<html>
<head>
	<title>SignUp Form</title>

	<link href="style.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
	
	<div class="main-w3layouts wrapper">
		<h1>New User Signup:</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="signup-submit.php" method="post">
					<input class="text" type="text" name="fname" placeholder="First Name" required=""> <br>
					<input class="text" type="text" name="lname" placeholder="Last Name" required=""> <br>
					<input class="text" type="text" name="username" placeholder="User Name" required="">
					<input class="text email" type="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" name="password" placeholder="Password(6-12)" required="" pattern=".{6,12}">
					<input class="text w3lpass" type="password" name="password_confirm" placeholder="Confirm Password" required=""mpattern=".{6,12}">
					<input type="checkbox" class="checkbox" required="">
					<span>I Agree To The Terms & Conditions</span>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Have an Account? <a href="login.php"> Login Now!</a></p>
			</div>
		</div>

	</div>
	
</body>
</html>