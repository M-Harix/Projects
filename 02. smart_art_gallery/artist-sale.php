<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if($_SESSION['role'] == 'artist')
    {
?>
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet/w3.css">
<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
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
  margin-top:7%;
}
body,h1,h2,h3,h4,h5,h6,.w3-wide 
{font-family: "Montserrat", sans-serif;}
</style>
</head>
<body>
  <?php
    require_once 'headerartist.php';
?>
<div class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width: 20%;" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>My Gallery</b></h3>
    <hr>
  </div>
  <div class="w3-large w3-text-grey" style="font-weight:bold;">
    <a onclick="myAccFunc()" href="#" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Manage Collection <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <!--<a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>-->
      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
    </div>
    <a href="exhibition-request.php" class="w3-bar-item w3-button" style="color:black;">Add in Exhibition</a>
    <a href="artist-sale.php" class="w3-bar-item w3-button" style="color:black;">For Sale</a>
    
    <a href="artist-sold.php" class="w3-bar-item w3-button" style="color:black;">Sold</a>
    <a href="#" class="w3-bar-item w3-button" style="color:black;">Logout</a>
  </div>
  
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
  
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->


  <!-- Image header -->


  <div class="w3-container w3-text-grey" id="jeans">
    <h3 class="w3-wide" style="margin-top:5%; color:black;"><b>My Arts For Sale</b></h3>
    <hr>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
        </div>
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Mega Ripped Jeans<br><b>$19.99</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="Images/Home Images/01.jpg" style="width:100%">
          </div>
          <p>Mega Ripped Jeans<br><b>$19.99</b></p>
        </div>
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Washed Skinny Jeans<br><b>$20.50</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Washed Skinny Jeans<br><b>$20.50</b></p>
        </div>
        <div class="w3-container">
          <div class="w3-display-container">
            <img src="Images/Home Images/01.jpg" style="width:100%">
            
          </div>
          <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
        </div>
      </div>

      <div class="w3-col l3 s6">
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
        </div>
        <div class="w3-container">
          <img src="Images/Home Images/01.jpg" style="width:100%">
          <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
        </div>
      </div>
  </div>
  

  </div>
  <!-- End page content -->
</div>

<!-- Newsletter Modal -->


<script>
// Accordion 
function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}
</script>
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
