<!DOCTYPE html>
<html>
<head>
	<title>Signup Successful</title>
</head>
<link href="test.css" rel="stylesheet">
<body>
	<?php  
	$data = $_POST;
	$error=False;
	$errmsg="";
	if (empty($data['fname']) || empty($data['lname']) || empty($data['username']) ||empty($data['email']) ||empty($data['password']) || empty($data['password_confirm'])){ //check if name, email, password are set or not blank
		$error=True;
		$errmsg .= "All fields are required! ";
	}

	$textFile = file_get_contents("user.txt");
	$each_user= (explode("\n", $textFile));
	for($i=0; $i<count($each_user); $i++){
		$userinfo=(explode(",", $each_user[$i]));
		if ($userinfo[0]==$_POST["username"]) { //check if the new singup user name already in user.txt, case sensetive!!
			$error=True;
			$errmsg .= "Username has already been taken! ";
			//echo "duplicate name";
		}
	}
	if ($_POST['password']!= $_POST['password_confirm'])
	{
		$error=True;
		$errmsg .= "Password did not match! ";
	}

	if ($error==True) {
		echo "<h1>Error! Invalid data</h1>
		<p>We're sorry. You submitted invalid information(s). ".$errmsg." Please go back and try again.</p>
		";
		echo "<a href='"."signup.php"."'>
		Back to signup page
		</a>";
		exit();

	}else{
		$Data = $_POST["username"].','.$_POST["fname"].','.$_POST['lname'].','.$_POST['email'].','.$_POST['password'];
		//$textFile = file_get_contents("user.txt");
		//$singles= (explode("\n", $textFile)); 
	if(!empty($each_user[count($each_user)-1])){ //check if the last line has content already, if has content
		file_put_contents("user.txt", "\n", FILE_APPEND);//make new line first
		file_put_contents("user.txt", $Data, FILE_APPEND);//append info to the new line
	}else{
		file_put_contents("user.txt", $Data, FILE_APPEND);
	}
	//file_put_contents("singles.txt", $Data, FILE_APPEND);

	}
	?>

	<div class="instruction">
		<h1>Thank you!</h1>
		<p>Welcome, <?= $_POST["username"] ?>!</p>
		<p>Now <a href="login.php">log in to your account!</a></p>
	</div>

</body>
</html>