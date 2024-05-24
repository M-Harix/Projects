<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url('assets/w3css/w3.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/www.w3schools.com/lib/w3-theme-blue-grey.css'); ?>"/>
  		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"/>
		<link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet" type="text/css" >
	</head>
	<body class="w3-theme-l5">
    <div class="box">

      <div id="mySidenav" class="sidenav">
        <a href="approval">Requests</a>
        <a href="rent">Tolet Properties</a>
        <a href="buy">Selling Properties</a>
        <a href="members">Members</a>
      </div>
      <div class="inner-box">
        

      </div>

    </div>

 
    <script>
    // Accordion
    function myFunction(id) {
      var x = document.getElementById(id);
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
      } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
      }
    }
    </script>
	</body>
</html>