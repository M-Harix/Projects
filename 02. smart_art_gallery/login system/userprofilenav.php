<?php

session_start();
require_once 'conn.php';
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap All in One Navbar</title>
<link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
		background: #eeeeee;
	}
    .form-inline {
        display: inline-block;
    }
	.navbar {		
		background: black;
		padding-left: 16px;
		padding-right: 16px;
		border-left: 0;
		border-right: 0;
		border-bottom: 1px solid #d6d6d6;
		box-shadow: 0 0 4px rgba(0,0,0,.1);
		margin-bottom: 0;
		width: 100%;
		border-radius: 0;
		color: white;
	}

	.nav img {
		border-radius: 50%;
		width: 36px;
		height: 36px;
		margin: -8px 0;
		float: left;
		margin-right: 10px;
	}
	.navbar .navbar-brand {
		color: white;
		padding-left: 0;
		padding-right: 50px;
		font-family: 'Merienda One', sans-serif;
	}
	.navbar .navbar-brand i {
		font-size: 20px;
		margin-right: 30px;
	}
	.search-box {
        position: relative;
    }	
    .search-box input {
		box-shadow: none;
        padding-right: 35px;
        border-radius: 3px !important;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 7px;
		height: 100%;
    }
    .search-box i {
        color: #a0a5b1;
		font-size: 19px;
    }
	.navbar ul li i {
		font-size: 18px;
	}
	.navbar .dropdown-menu i {
		font-size: 16px;
		min-width: 22px;
	}
	.navbar .dropdown.open > a {
		background: none !important;
	}
	.navbar .dropdown-menu {
		border-radius: 1px;
		border-color: #e5e5e5;
		box-shadow: 0 2px 8px rgba(0,0,0,.05);
	}
	.navbar .dropdown-menu li a {
		color: #777;
		padding: 8px 20px;
		line-height: normal;
	}
	.navbar .dropdown-menu li a:hover, .navbar .dropdown-menu li a:active {
		color: #333;
	}	
	.navbar .dropdown-menu .material-icons {
		font-size: 21px;
		line-height: 16px;
		vertical-align: middle;
		margin-top: -2px;
	}
	.navbar .badge {
		background: #f44336;
		font-size: 11px;
		border-radius: 20px;
		position: absolute;
		min-width: 10px;
		padding: 4px 6px 0;
		min-height: 18px;
		top: 5px;
	}	
	.navbar .active a, .navbar .active a:hover, .navbar .active a:focus {
		background: transparent !important;
	}
	@media (min-width: 1200px){
		.form-inline .input-group {
			width: 300px;
			margin-left: 30px;
		}
	}
	@media (max-width: 1199px){
		.form-inline {
			display: block;
			margin-bottom: 10px;
		}
		.input-group {
			width: 100%;
		}
	}
	.avatarr:hover{
		color: white;
	}

	.navbar-default .navbar-nav>.active>a{
		color: :white;
	}
	ul .dropdown-menu{
		background: black;
		color: white;
	}
	.caret{
		color: white;
	}
	.navbar-default .navbar-nav>li>a{
		color: white;
	}
	.navbar-default .navbar-nav>li>a:hover{
		color: white;
	}
	.navbar .dropdown-menu li a{
		color: white;
	}
	.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{
		color: white;
	}
</style>
</head> 
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<a class="navbar-brand" href="#"><i class="fa fa-cube"></i>Brand<b>Name</b></a>  		
		<button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
			<span class="navbar-toggler-icon"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="activee"><a href="#">Home</a></li>
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#">Categories <b class="caret"></b></a>
				<ul class="dropdown-menu">					
					<li><a href="Abstract.php">Abstract</a></li>
					<li><a href="#">Calligraphy</a></li>
					<li><a href="#">Miniature</a></li>
					<li><a href="#">Figurative</a></li>
				</ul>
			</li>
			<li><a href="#">Exhibitions</a></li>
			<li><a href="#">Contact</a></li>
			<li><a href="#">About</a></li>
		</ul>
		<form class="navbar-form form-inline">
			<div class="input-group search-box">								
				<input type="text" id="search" class="form-control" placeholder="Search by Artist">
				<span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
			</div>
		</form>
		<ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
				<a href="#" data-toggle="dropdown" class="dropdown-toggle user-action">
					<?php
				         $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
				         if(mysqli_num_rows($select) > 0){
				            $fetch = mysqli_fetch_assoc($select);
				         }
				         if($fetch['image'] == ''){
				            echo '<img src="images/default-avatar.png" class="avatarr" alt="Avatar">';
				            echo $fetch['name'].'<b class="caret"></b>';
				         }
				         else{
				            echo '<img src="uploaded_img/'.$fetch['image'].'" class="avatarr" alt="Avatar">';
				            echo $fetch['name'].'<b class="caret"></b>';
				         }
				    ?>
				    	
				</a>
				<ul class="dropdown-menu">
					<li><a href="userprofile.php"><i class="fa fa-user-o"></i> Profile</a></li>
					<li><a href="#"><i class="fa fa-calendar-o"></i> My Order</a></li>
					<li class="divider"></li>
					<li><a href="home.php?logout=<?php echo $user_id; ?>"> <i class="material-icons">&#xE8AC;</i> Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>
</nav>
</body>
</html>                            