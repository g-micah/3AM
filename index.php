<?php
include('signinScript.php');
if(isset($_SESSION['login_user'])){
header("location: main/home.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>
<div class="topSection">
	<a href="index.php"><p class="logo">3AM</p></a>
	<hr>
	<div class="wlcome">
		<p>
			<h1>Welcome to 3AM</h1>
		</p>

		<a href="signin.php"><button id="homeSignin_btn">Sign in</button></a>
		<a href="signup.php"><button id="homeSignUp_btn">Sign up</button></a>
	
	</div>

</div>


</body>
</html>