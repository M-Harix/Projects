<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/css/login.css'); ?>" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<a href="index.php" class="logo">
			<h1>Easy Realty</h1> 
			<h4>R E A L &nbsp&nbsp&nbsp E S T A T E</h4>
		</a>
		<video autoplay loop muted plays-inline class="back-video">
			<source src="<?php echo base_url(); ?>assets/videos/bg.mp4">
		</video>
		<div class="body">
			<div class="container">
				<form method="POST" action="Signin/signin">
					<div class="row">
						<h2 style="text-align:center; color: white;">Login</h2>
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
							<input type="email" name="email" placeholder="Email">
							<span class="text-danger"><?php //if((form_error('email'))) {echo form_error('email');}  ?></span>
							<input type="password" name="password" placeholder="Password">
							<span class="text-danger"><?php //echo form_error('password'); ?></span>
							<input type="submit" value="Login">
							<?php
								echo $this->session->flashdata('error');
							?>
						</div>
					</div>
				</form>
			</div>
			<div class="bottom-container">
				<a href="signup" style="color:white" class="btn signup">Sign up</a>
			</div>
		</div>
	</body>
</html> 