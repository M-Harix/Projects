<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/contact.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
<?php
			require_once("header.php");
?>
		</header>
		<hr>
			<div class="body">
				<div>
					<img class="building" src="images/contact.jpg" alt="Building">
				</div>
				<div class="grid-container">
					<div class="grid-item">
						<h1 class="form-title">We'd love<br>to hear<br>from you .</h1>
					</div>
					<div class="grid-item">
						<form method="POST" class="item2">
							<input type="text" class="contant"  placeholder="Name*" required>
							<input type="email" class="contant" placeholder="Email*" required>
							<textarea class="contant" rows="3" placeholder="Message"></textarea>
							<input type="submit" class="btn" name="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		<footer>
<?php
			require_once("footer.php");
?>
		</footer>
	</body>
</html>