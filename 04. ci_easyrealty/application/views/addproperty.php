<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/css/addproperty.css'); ?>" rel="stylesheet" type="text/css" >
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
				<form method="POST" enctype="multipart/form-data" action="<?php echo base_url(); ?>addproperty/insertproperty">
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
						<label class="left">Property Category: </label>
						<select name="category" class="right contant" id="cars" style="margin-top:30px;">
						    <option value="house">House</option>
						    <option value="plot">Plot</option>
						    <option value="commercial">Commercial</option>
						</select>
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
							<input type="file" class="right " name="imagename[]" multiple required>
							<small><?php if(isset($imageError)) {echo $imageError;} ?></small>
						</div>
					</div>
					<p><span class="note">Note:&nbsp;</span>Press CTRL key while selecting images to upload multiple images at once.</p>
					<input type="submit" class="btn" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</body>
</html>