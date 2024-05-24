<!doctype html>
<?php
	require_once("conn.php");
	//header("location:view.php");
	session_start();
	$propertyid=$_SESSION['propertyid'];
	$purpose=$_SESSION['purpose'];
	$address=$_SESSION['address'];
	$title=$_SESSION['title'];
	$description=$_SESSION['description'];
	$price=$_SESSION['price'];
	$area=$_SESSION['area'];
	$whatsapp=$_SESSION['whatsapp'];;
?>
<html lang="en">
  <head>
	<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="stylesheet/view.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
	<div class="body">
		<div class="right">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
<?php
					$sql2="SELECT * FROM images WHERE propertyid='$propertyid'";
					$pic=mysqli_query($conn, $sql2);
					$i=1;
					while($resi = mysqli_fetch_array($pic))
					{
						if($i==1)
						{
							echo "<div class='carousel-item active'>
							<img class='d-block ' src='images/databaseimages/".$resi['imagename']."' height='600px' width='540px'>
							</div>";
							$i++;
						}
						else
						{
							echo "<div class='carousel-item '>
							<img class='d-block ' src='images/databaseimages/".$resi['imagename']."'>
							</div>";
						}
					}
?>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="de">
<?php
			echo"<label>Property Type:</label>
			<p>".$title."</p>
			<label>Property Description:</label>
			<p>".$description."</p>
			<label>Price:</label>
			<p>".$price." PKR</p>
			<label>Area:</label>
			<p>".$area."</p>
			<label>WhatsApp:</label>
			<p>".$whatsapp."</p>";
			$propertyid = $purpose = $address = $title = $description = $price = $area = $whatsapp = NULL;
?>
		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>