<!doctype html>
<html lang="en">
  <head>
		<title>Easy Realty</title>
			<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <!--
	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  	-->
	  	<!--
	    <link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap4/bootstrap.min.css'); ?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  -->
		<link href="<?php echo base_url('assets/css/view.css'); ?>" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="<?php echo base_url('assets/Bootstrap4/bootstrap.min.css'); ?>">
	</head>
	<body>
		<div class="body">
			<div class="right">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
	<?php
	
						$i=1;
						foreach($img as $im)
						{
							if($i==1)
							{
								echo "<div class='carousel-item active'>
								<img class='d-block ' src='".base_url()."assets/images/databaseimages/".$im->imagename."' height='600px' width='540px'>
								</div>";
								$i++;
							}
							else
							{
								echo "<div class='carousel-item '>
								<img class='d-block ' src='".base_url()."assets/images/databaseimages/".$im->imagename."'>
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
			foreach($fetch as $row)
			{
				echo"<label>".$row->category."</label><br><br>
				<label>".$row->description."</label><br><br>
				<label>".$row->price." PKR</label><br><br>
				<label>".$row->area."</label><br><br>
				<label><a href='https://wa.me/".$row->whatsapp."'> ".$row->whatsapp." </a></label>";
				//$propertyid = $purpose = $address = $title = $description = $price = $area = $whatsapp = NULL;
			}
	?>
			</div>
		</div>
	    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>