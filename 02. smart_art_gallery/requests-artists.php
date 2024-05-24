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
	<style type="text/css">
		.w3-container a img{
			    margin-top: 5%;
		}
	</style>
		
</head>
<body>
	<?php
		require_once "headeradmin.php";
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


	<div class="area" style="width: 79%;float: right;margin-top: 5%;">
	    <div class="inner-box">

<?php 

      $q="SELECT * FROM artists WHERE status='offline' ORDER BY id DESC";
	$query= mysqli_query($conn, $q);
      foreach($query as $res)
      {
          echo " 
	              <div class='w3-quarter' style='margin: 4%;'>
	                <div class='w3-card w3-round w3-white w3-center'>
	                  <div class='w3-container' style='padding: 0.01em 13px;'>
	                    
	                    <a href='view-description.php?id=". $res['id'] ."'>
	                      <img src='Images/artists images/".$res['pic']."' height='230vw' width='240vw'>
	                    </a>
	                  </div>";
	                  //<label><span class='label'>Category:&nbsp;<span>".$row->category."</label><br>
	                  echo"
	                  <p><br>".$res['firstname']." ".$res['lastname']."</p><br>
	                  <a href='view-description.php?id=". $res['id'] ."'><b>View</b></a>
	                  <div class='w3-row '>
	                  	<div class='w3-half'>
			                  <a href='artist-accept.php?id=".$res['id']."' class='w3-button w3-block w3-green w3-section' >Accept</a>
			            </div>
			            <div class='w3-half'>
			                  <a href='artist-reject.php?id=".$res['id']."' class='w3-button w3-block w3-red w3-section'>Decline</a>
			            </div>
			            
	              	</div>
	                </div>
	              </div>";
	            }
?>
      </div>
    </div>
</div>
	
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