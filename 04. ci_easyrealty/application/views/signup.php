<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="utf-8">
		<title>Form</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/css/signup.css'); ?>" type="text/css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<a href="index.php" class="logo">
			<h1>Easy Realty</h1>
			<h4 class="black">R E A L &nbsp&nbsp&nbsp E S T A T E</h4>
		</a>
		<video autoplay loop muted plays-inline class="back-video">
			<source src="<?php echo base_url(); ?>assets/videos/bg.mp4">
		</video>
		<div class="container">
			<form method="POST" action="<?php echo base_url(); ?>Signup/signup">
				<!--First name-->
				<div class="box">
					<label for="firstName" class="fl fontLabel"> First Name: </label>
					<div class="new iconBox">
						<i class="fa fa-user" aria-hidden="true"></i>
					</div>
					<div class="fr"> 
						<input type="text" name="firstName" value="<?php echo set_value('firstName'); ?>" placeholder="First Name" class="textBox" autofocus="on">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('firstName'); ?>
				<!--Second name-->
				<div class="box">
					<label for="secondName" class="fl fontLabel"> Seconed Name: </label>
					<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="text" name="lastName" value="<?php echo set_value('lastName'); ?>" placeholder="Last Name" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('lastName'); ?>
				<!---Phone No.------>
				<div class="box">
					<label for="phone" class="fl fontLabel"> Phone No.: </label>
					<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="text" name="phone" maxlength="10" value="<?php echo set_value('phone'); ?>" placeholder="Phone No." class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('phone'); ?>
				<!---Email ID---->
				<div class="box">
					<label for="email" class="fl fontLabel"> Email ID: </label>
					<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Id" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('email'); ?>
				<!---Password------>
				<div class="box">
					<label for="password" class="fl fontLabel"> Password: </label>
					<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="Password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('password'); ?>
				<div class="box">
					<label for="password" class="fl fontLabel">Confirm Password: </label>
					<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
					<div class="fr">
						<input type="Password" name="passconf" value="<?php echo set_value('passconf'); ?>" placeholder="Password" class="textBox">
					</div>
					<div class="clr"></div>
				</div>
				<?php echo form_error('passconf'); ?>
				<!--Terms and Conditions----
				<div class="box terms">
					<input type="checkbox" name="Terms"> &nbsp; I accept the terms and conditions
				</div>
				-->
				<!---Submit Button------>
				<div class="box" style="background: #2d3e3f">
					<input type="Submit" name="submit" class="submit" value="SUBMIT">
				</div>
				<div class="lastline">
					<label for="login" class="fontLabel">Already have an account?</label><a class="login" href="signin">&nbsp;Login</a>
				</div>
			</form>
		</div>
	</body>
</html>