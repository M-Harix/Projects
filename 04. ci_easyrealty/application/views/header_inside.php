<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/css/header.css'); ?>" rel="stylesheet" type="text/css" >
		<link href="<?php echo base_url('assets/css/boxicons.min.css'); ?>" rel="stylesheet" type="text/css" >

		<link href="<?php echo base_url('assets/lib/flaticon/font/flaticon.css');?>" rel="stylesheet">

	    <!-- Libraries Stylesheet --> 
	    <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css');?>" rel="stylesheet">

	    <!-- Customized Bootstrap Stylesheet -->
	    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

	    <!-- Template Stylesheet -->
	    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

	    <link href="<?php echo base_url('assets/css/header.css');?>" rel="stylesheet">

		<title>Easy Realty Real Estate</title>
	</head> 
	<body>
		<header>
			<!-- Header Start -->
		    <div class="container-fluid bg-dark px-0 header" id="myHeader">
		        <div class="row gx-0">
		            <div class="col-lg-3 bg-dark d-none d-lg-block">
		                <a href="index" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
		                    <h1 class="m-0 display-4 text-primary">Easy Realty</h1>
		                </a>
		            </div>
		            <div class="col-lg-9">
		                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
		                    <a href="index" class="navbar-brand d-block d-lg-none">
		                        <h1 class="m-0 display-4 text-primary">Easy Realty</h1>
		                    </a>
		                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
		                        <span class="navbar-toggler-icon"></span>
		                    </button>
		                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
		                        <div class="navbar-nav mr-auto py-0">
		                            <a href="home" class="nav-item nav-link">Home</a>
		                            <div class="nav-item dropdown">
		                                <a href="buy" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Buy</a>
		                                <div class="dropdown-menu rounded-0 m-0">
		                                    <a href="BuyHouse" class="dropdown-item">House</a>
		                                    <a href="BuyPlot" class="dropdown-item">Plot</a>
		                                    <a href="BuyCommercial" class="dropdown-item">Commercial</a>
		                                </div>
		                            </div>
		                            <div class="nav-item dropdown">
		                                <a href="rent" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Rent</a>
		                                <div class="dropdown-menu rounded-0 m-0">
		                                    <a href="RentHouse" class="dropdown-item">House</a>
		                                    <a href="RentPlot" class="dropdown-item">Plot</a>
		                                    <a href="RentCommercial" class="dropdown-item">Commercial</a>
		                                    
		                                </div>
		                            </div>
		                            <a href="addproperty" class="nav-item nav-link">Addproperty</a>
		                            <a href="about" class="nav-item nav-link">About</a>
		                            <a href="contact" class="nav-item nav-link">Contact</a>
			                    </div>
			                    <div class="dropdownn">
								  <button onclick="drop()" class="dropbtn dropdown-toggle"></button>
								  <div id="myDropdown" class="dropdown-content ">
								  	<a href="profile">Profile</a>
								  	<a href="ads">Uploads</a>
								    <a href="signin/logout">Logout</a>
								  </div>
								</div>
			                    <!--<div>
		                        	<div class="nav-item dropdown  right-dropdown">
		                                <a href="rent" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"></a>
		                                <div class="dropdown-menu right-dropdown rounded-0 m-0">
		                                    <a href="signin/logout" class="py-md-1 px-md-3 d-none d-lg-block">Logout</a>
		                        			<a href="profile" class="py-md-1 px-md-3 d-none d-lg-block">profile</a>
		                                </div>
		                            </div>
								</div>-->
		                    </div>
		                </nav>
		                </div>
		            </div>
		        </div>
		    </div>
    <!-- Header End -->
		</header>
			<!-- JavaScript Libraries -->
		    <script src="<?php echo base_url('assets/code.jquery.com/jquery-3.4.1.min.js');?>"></script>
		    <script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
		    <script src="<?php echo base_url('assets/lib/easing/easing.min.js');?>"></script>
		    <script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js');?>"></script>
		    <script src="<?php echo base_url('assets/lib/counterup/counterup.min.js');?>"></script>
		    <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js');?>"></script>
		    <!-- Template Javascript -->
		    <script src="<?php echo base_url('assets/js/main.js');?>"></script>
		    <script type="text/javascript">
				window.onscroll = function() {myFunction()};

				var header = document.getElementById("myHeader");
				var sticky = header.offsetTop;

				function myFunction() {
				  if (window.pageYOffset > sticky) {
				    header.classList.add("sticky");
				  } else {
				    header.classList.remove("sticky");
				  }
				}

				/* When the user clicks on the button, 
				toggle between hiding and showing the dropdown content */
				function drop() {
				  document.getElementById("myDropdown").classList.toggle("show");
				}

				// Close the dropdown if the user clicks outside of it
				window.onclick = function(event) {
				  if (!event.target.matches('.dropbtn')) {
				    var dropdowns = document.getElementsByClassName("dropdown-content");
				    var i;
				    for (i = 0; i < dropdowns.length; i++) {
				      var openDropdown = dropdowns[i];
				      if (openDropdown.classList.contains('show')) {
				        openDropdown.classList.remove('show');
				      }
				    }
				  }
				}
			</script>
	</body>
</html>