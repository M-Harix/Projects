<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/buy.css" rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	</head>
	<body>
		<header>
<?php
			require_once("header.php");
?>
		</header>
		<hr>
		<div>
			<div class="body">
			<h2>Properties for Sale</h2>
				<div class="grid-container">
<?php
					session_start();
					require_once 'conn.php';
					$sql1="SELECT * FROM properties WHERE purpose='forsale' AND status='online'";
					$properties=mysqli_query($conn, $sql1);
					while($resp = mysqli_fetch_array($properties))
					{
						$id=$resp['propertyid'];
						
						$sql2="SELECT * FROM images WHERE propertyid='$id' LIMIT 1";
						$pic=mysqli_query($conn, $sql2);
						while($resi = mysqli_fetch_array($pic))
						{
?>
							<div class="grid-item">
							<div>
								<div class="img">
									<a href="view.php">
<?php
										echo "<img src='images/databaseimages/".$resi['imagename']."' height='240px' width='240'>
									</a>
								</div>
								<label><span class='label'>Area:&nbsp;<span>".$resp['area']."</label><br>
								<label><span class='label'>PKR:&nbsp;<span>".$resp['price']."</label><br>
								<a href='view.php'>Details..</a>
							</div>
							</div>";			
						}
						$_SESSION['propertyid']=$resp['propertyid'];
						$_SESSION['purpose']=$resp['purpose'];
						$_SESSION['address']=$resp['address'];
						$_SESSION['description']=$resp['description'];
						$_SESSION['price']=$resp['price'];
						$_SESSION['area']=$resp['area'];
						$_SESSION['whatsapp']=$resp['whatsapp'];
					}
?>
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