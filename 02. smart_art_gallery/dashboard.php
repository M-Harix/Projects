<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
		if($_SESSION['role'] == 'admin')
		{ 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
	<link rel="stylesheet" href="stylesheet/w3.css">
	<style>
  .w3-sidebar{
    top:12%;
    left: 0;
    height: 100%;
  }
  .w3-main{
    width: 80%;
    float: right;
}
.w3-container{
  margin-top:5%;
}
.w3-container p{
	text-align: center;
	font-weight: 700;
	margin-top: 10px;
}
h3 a{
	text-decoration: none;
}
body,h1,h2,h3,h4,h5,h6,.w3-wide 
{font-family: "Montserrat", sans-serif;}
</style>
</head>
<body>
	<?php
			require_once 'headeradmin.php';
	?>

				<nav class="w3-sidebar w3-bar-block w3-collapse w3-top" style="z-index:3;width: 20%;top: 11%; background-color: #9ca2a4;" id="mySidebar">
		  <div class="w3-container w3-display-container w3-padding-16">
		    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
		    <h3 class="w3-wide"><b>My Gallery</b></h3>
		    <hr style="border-top: 1px solid black;">
		  </div>
		  <div class="w3-large w3-text-grey" style="font-weight:bold;">
		  	<a href="arts-admin.php" class="w3-bar-item w3-button" style="color:black;">Manage Arts</a>
	<!--	    <a onclick="myAccFunc()" href="#" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
		      All Collection <i class="fa fa-caret-down"></i>-->
		    </a>
		    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
<!--		      <a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>
		      <a href="category1.php" class="w3-bar-item w3-button">Category 1</a>
		      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
		      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
-->
		    </div>
		    <a href="exhibitionadmin.php" class="w3-bar-item w3-button" style="color:black;">Exhibitions</a>
		    <a href="artistadmin.php" class="w3-bar-item w3-button" style="color:black;">Artists</a>
		    
		    <a href="requests-artists.php" class="w3-bar-item w3-button" style="color:black;">Artists Requests</a>
		    <a href="requests-ex.php" class="w3-bar-item w3-button" style="color:black;">Exhibition Requests</a>
		    <a href="requests-order.php" class="w3-bar-item w3-button" style="color:black;">Order Requests</a>
		    <a href="index.php" class="w3-bar-item w3-button" style="color:black;">Logout</a>
		  </div>
		  
		</nav>
	<div class="w3-main" style="margin-bottom: 5%;">
  	<div class="w3-hide-large" style="margin-top:83px"></div>

			<div class="w3-container w3-text-grey" id="jeans">
		    <h3 class="w3-wide" style=" color:black; "><a href="arts-admin.php"><b>Arts</b></h3></a>
		    <hr>
		  </div>

		  <!-- Product grid -->

		  <div class='w3-row w3-grayscale' style="filter: none;">

<?php

    $q="SELECT * FROM arts ORDER BY id DESC";
    $query= mysqli_query($conn, $q);
    while($res = mysqli_fetch_array($query))
    {
      echo "  
            <div class='w3-col l3 s6'>
            	<div class='w3-container'>
              	<img src='Images/arts images/".$res['pic']."' style='width:100%; height:200px;'>
            </div>
          </div>";
    }
?>
			</div>

		  <div class="w3-container w3-text-grey" id="jeans">
		    <h3 class="w3-wide" style="margin-top:5%; color:black;"><a href="artistadmin.php"><b>Manage Artists</b></a></h3>
		    <hr>
		  </div>
		  <div class="w3-row w3-grayscale">

<?php
				$q="SELECT * FROM artists ORDER BY id DESC";
				$query= mysqli_query($conn, $q);
				while($res = mysqli_fetch_array($query))
				{
					echo "  
            <div class='w3-col l3 s6'>
            	<div class='w3-container'>
              	<img src='Images/artists images/".$res['pic']."' height='200' width='100%'>
              	<p>".$res['firstname']." ".$res['lastname']."<br></p>
            </div>
          </div>";
				}
?>

		  </div>
	</div>





<script>
$(document).ready(function(){
  $(".profile p").click(function(){
    $(".profile-div").toggle();
    
  });
  $(".noti-icon").click(function(){
    $(".notification-div").toggle();
  });
});
</script>
<script type="text/javascript">
	$('li').click(function(){
    $('li').removeClass("active");
    $(this).addClass("active");
});




	function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
<?php 
		}
		else
		{
			header('location:login.php');
		}
	}
	else
	{
		header('location:login.php');
	}
?>