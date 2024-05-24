<!DOCTYPE html>
<html lang="en">
	<head> 
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/css/contact.css'); ?>" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
	</head>
	<body>
			<div class="body">
				<div>
					<div class="background-1">
				   <img class="building" src="<?php echo base_url('assets/images/about1.jpg'); ?>" alt="Building">
				   
				   </div>
				</div>

				<div class="container-fluid p-5">
			        <div class="mb-5 text-center">
			            <h5 class="text-primary text-uppercase">Contact Us</h5>
			            <h1 class="display-3 text-uppercase mb-0">Get In Touch</h1>
			        </div>
			        <div class="row g-5 mb-5">
			            <div class="col-lg-4">
			                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
			                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
			                        <i class="fa fa-map-marker-alt fs-4 text-white"></i>
			                    </div>
			                    <h5 class="text-uppercase text-primary">Visit Us</h5>
			                    <p class="text-secondary mb-0">Scheme 02, Block Y, Gulshan-e-Iqbal, RYK</p>
			                </div>
			            </div>
			            <div class="col-lg-4">
			                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
			                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
			                        <i class="fa fa-envelope fs-4 text-white"></i>
			                    </div>
			                    <h5 class="text-uppercase text-primary">Email Us</h5>
			                    <p class="text-secondary mb-0">easyrealty@gmail.com</p>
			                </div>
			            </div>
			            <div class="col-lg-4">
			                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
			                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
			                        <i class="fa fa-phone fs-4 text-white"></i>
			                    </div>
			                    <h5 class="text-uppercase text-primary">Call Us</h5>
			                    <p class="text-secondary mb-0">+92 306 7448419</p>
			                </div>
			            </div>
			        </div>
			        <div class="row g-0">
			            <div class="col-lg-6">
			            	<div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
				                <div class="position-relative h-100">
				                    <img class="position-absolute rounded" src="<?php echo base_url('assets/images/rykmap.png'); ?>">
				                </div>
				            </div>
			            </div>
			            <div class="col-lg-6">
			                <form method="POST" class="item2" action="<?php echo base_url(); ?>Contact/contact">
								<input type="text" class="contant" name="name" placeholder="Name*" required>
								<input type="email" class="contant" name="email" placeholder="Email*" required>
								<textarea class="contant" rows="3" name="message" placeholder="Message"></textarea>
								<input type="submit" class="submit" name="submit" value="Submit">
							</form>
			            </div>
			        </div>
			    </div>
			</div> 
	</body>
</html>