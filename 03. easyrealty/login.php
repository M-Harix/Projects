<?php
	session_start();
	require_once 'conn.php';
	/*if (!isset ($_SESSION['email']) && !isset ($_SESSION['id']))
	{*/	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/login.css" rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	</head>
	<body>
		<a href="index.php" class="logo">
			<h1>Easy Realty</h1>
			<h4>R E A L &nbsp&nbsp&nbsp E S T A T E</h4>
		</a>
		<video autoplay loop muted plays-inline class="back-video">
			<source src="videos/bg.mp4">
		</video>
		<div class="body">
			<div class="container">
				<form method="POST" action="logintest.php">
					<div class="row">
						<h2 style="text-align:center">Login</h2>
						<div class="vl">
							<span class="vl-innertext">or</span>
						</div>
						<div class="col">
							<a href="#" class="fb btn">
							<i class="fa fa-facebook fa-fw"></i> Login with Facebook
							</a>
							<a href="#" class="twitter btn">
							<i class="fa fa-twitter fa-fw"></i> Login with Twitter
							</a>
							<a href="#" class="google btn"><i class="fa fa-google fa-fw">
							</i> Login with Google+
							</a>
						</div>
						<div class="col">
<?php
							if (isset($_GET['error']))
							{
?>
								<div class="alert">
								<?=$_GET['error']?>
								</div>
<?php
							}
?>
							<div class="hide-md-lg">
								<p>Or sign in manually:</p>
							</div>
							<input type="email" name="email" placeholder="Email">
							<input type="password" name="password" placeholder="Password">
							<input type="submit" value="Login">
						</div>
					</div>
				</form>
			</div>
			<div class="bottom-container">
				<div class="row">
					<div class="col">
						<a href="signup.php" style="color:white" class="btn">Sign up</a>
					</div>
					<div class="col">
						<a href="#" style="color:white" class="btn">Forgot password?</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php
	/*}
	else
	{
		//header("location:login.php");
	}*/
?>