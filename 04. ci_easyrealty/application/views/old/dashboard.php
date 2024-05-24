<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/dashboard.css" rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
<?php
			require_once("headeradmin.php");
?>
		</header>
		<video autoplay loop muted plays-inline class="back-video">
			<source src="videos/bg.mp4">
		</video>
		<div class="buttons">
			<div class="btn">
				<a class="first-link" href="approval.php">Requests</a>
				<a href="approval.php">View Requests</a>
			</div>
			<div class="btn">
				<a class="first-link" href="rentadmin.php">Rent</a>
				<a href="rentadmin.php">View Rent Page</a>
			</div>
			<div class="btn">
				<a class="first-link" href="buyadmin.php">Buy</a>
				<a href="buyadmin.php">View Buy Page</a>
			</div>
		</div>
	</body>
</html>