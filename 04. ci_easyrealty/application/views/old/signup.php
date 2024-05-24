<!DOCTYPE html>
<?php
	session_start();
	require_once 'conn.php';
	if(isset($_POST['submit']))
	{
		$firstName=$_POST['firstName'];
		$lastName=$_POST['secondName'];
		$phoneNumber=$_POST['phoneNo'];
		$email=$_POST['email'];
		$password= md5 ($_POST['password']);
		$ql="INSERT INTO users VALUES ('NULL', 'user', '$firstName', '$lastName', '$phoneNumber', '$email', '$password')";
		mysqli_query($conn, $ql);
		header('location:home1.php');
	}
?>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="utf-8">
		<title>Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/signup.css" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<a href="index.php" class="logo">
			<h1>Easy Realty</h1>
			<h4 class="black">R E A L &nbsp&nbsp&nbsp E S T A T E</h4>
		</a>
		<video autoplay loop muted plays-inline class="back-video">
			<source src="videos/bg.mp4">
		</video>
		<div class="container">
			<form method="POST" autocomplete="on">
				<!--First name-->
				<div class="box">
					<label for="firstName" class="fl fontLabel"> First Name: </label>
					<div class="new iconBox">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="fr">
						<input type="text" name="firstName" placeholder="First Name" class="textBox" autofocus="on" required>
					</div>
					<div class="clr"></div>
				</div>
				<!--Second name-->
				<div class="box">
					<label for="secondName" class="fl fontLabel"> Seconed Name: </label>
					<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="text" required name="secondName" placeholder="Last Name" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!---Phone No.------>
				<div class="box">
					<label for="phone" class="fl fontLabel"> Phone No.: </label>
					<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="text" required name="phoneNo" maxlength="10" placeholder="Phone No." class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!---Email ID---->
				<div class="box">
					<label for="email" class="fl fontLabel"> Email ID: </label>
					<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="email" required name="email" placeholder="Email Id" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!---Password------>
				<div class="box">
					<label for="password" class="fl fontLabel"> Password </label>
					<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="Password" required name="password" placeholder="Password" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<!--Terms and Conditions------>
				<div class="box terms">
					<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
				</div>
				<!---Submit Button------>
				<div class="box" style="background: #2d3e3f">
					<input type="Submit" name="submit" class="submit" value="SUBMIT">
				</div>
				<div class="lastline">
					<label for="login" class="fontLabel">Already have an account?</label><a class="login" href="Login.php">&nbsp;Login</a>
				</div>
			</form>
		</div>
	</body>
</html>