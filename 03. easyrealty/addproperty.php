<!DOCTYPE html>
<?php
	session_start();
	require_once 'conn.php';
	if(isset($_POST['submit']))
	{
		$purpose=$_POST['purpose'];
		$address=$_POST['address'];
		$title=$_POST['title'];
		$description=$_POST['description'];
		$price=$_POST['price'];
		$area=$_POST['area'];
		$whatsapp=$_POST['whatsapp'];
		$sql1="INSERT INTO properties VALUES ('NULL', '$purpose', '$address', '$title', '$description', '$price', '$area', '$whatsapp','offline')";
		mysqli_query($conn, $sql1);
		$sql2="SELECT * FROM properties ORDER BY propertyid DESC LIMIT 1";
		$data=mysqli_query($conn, $sql2);
		while($res = mysqli_fetch_array($data))
		{
			$id= $res['propertyid'];				
		}
		// File upload configuration  
		$extension = array('jpg','png','jpeg','gif'); 
		foreach($_FILES['image']['tmp_name'] as $key=>$value)
		{ 
			// File upload path 
			$fileName = $_FILES['image']['name'][$key]; 
			$fileName_tmp = $_FILES['image']['tmp_name'][$key];					 
			// Check whether file type is valid 
			$ext = pathinfo($fileName, PATHINFO_EXTENSION);
			if(in_array($ext, $extension))
			{ 
				// Upload file to server 
				move_uploaded_file($fileName_tmp, 'images/databaseimages/'.$fileName);
				// Insert image file name into database 
				$sql3 ="INSERT INTO images VALUES ('NULL', $id, '$fileName')";
				mysqli_query($conn, $sql3);
			}
		}
		header('location:addproperty.php');
		//header('location:addproperty.php?error=Submitted Successfully.');
	}
?>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="images/logo.png" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="stylesheet/addproperty.css" rel="stylesheet" type="text/css" >
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	</head>
	<body>
	<div class="head">
	<a href="#" class="logo">
			<h1>Easy Realty</h1>
			<h4>R E A L &nbsp&nbsp&nbsp E S T A T E</h4>
		</a>
		
	</div><br>
		<div class="body">
			<div class="container">
				<h2>Add a Property</h2>
				<form method="POST" enctype="multipart/form-data">
					<div class="box">
						<label class="left">Purpose:</label>
					<div class="innerbox">
						<input type="radio" name="purpose" value="forsale" required>
						<label>For Sale</label>
						<input type="radio" name="purpose" value="rent" required>
						<label>Rent</label>
					</div>
					</div>
					<div class="email">
						<label class="left">Address:</label>
						<textarea class="contant" name="address" rows="3" cols="50" required></textarea>
					</div>
					<div class="email">
						<label class="left">Property Title: </label>
						<input type="text" class="right contant" name="title" required>
					</div>
					<div class="email">
						<label class="left">Description: </label>
						<textarea class="right contant" name="description" rows="5" cols="50" required></textarea>
					</div>
					<div class="email">
						<label class="left">Inclusive Price (PKR): </label>
						<input type="number" class="right contant" name="price" required>
					</div>				
					<div class="email">
						<label class="left">Land Area: </label>
						<input type="text" class="right contant" name="area" required>
					</div>
					<div class="email">
						<label class="left">WhatsApp: </label>
						<input type="number" class="right contant" name="whatsapp" required>
					</div>
					<div class="box">
						<label class="left">Images:</label>
						<div class="innerbox">
							<input type="file" class="right " name="image[]" multiple required>
						</div>
					</div>
					<p><span class="note">Note:&nbsp;</span>Press CTRL key while selecting images to upload multiple images at once.</p>
					<input type="submit" class="btn" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>