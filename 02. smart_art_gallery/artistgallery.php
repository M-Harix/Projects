<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if($_SESSION['role'] == 'artist')
    {
    //  $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylesheet/w3.css">
    <link rel="stylesheet" href="stylesheet/aristgallery.css">
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
    body,h1,h2,h3,h4,h5,h6,.w3-wide{
      font-family: "Montserrat", sans-serif;
    }
     .grid{
    display: grid;
    width:100%;
    margin: 0 auto;
    grid-template-columns: repeat(3, 1fr);
}
.grid-item{
    display: flex;
    flex-direction: column;
    padding: 22px 35px 0px;
    text-align: center;
    position: relative;
}
    </style>
  </head>
<body>
<?php
    require_once 'headerartist.php';
?>
    <div class="w3-content" style="max-width:1200px">

    <!-- Sidebar/menu -->
      <div class="bb">
      <nav class="w3-sidebar w3-bar-block w3-collapse w3-top" style="z-index:3;width: 20%;height: -webkit-fill-available;" id="mySidebar">
        <div class="w3-container w3-display-container w3-padding-16" style="">
          <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
          <h3 class="w3-wide"><b>My Gallery</b></h3>
          <hr>
        </div>
        <div class="w3-large w3-text-grey" style="font-weight:bold;">
          <a href="artistcollection.php" class="w3-bar-item w3-button" style="color:black;">My Collection</a>
          <p onclick="myAccFunc()" class="w3-button w3-block w3-white w3-left-align w3-bar-item" id="myBtn">
            Manage Collection <i class="fa fa-caret-down" style="line-height: 0;"></i>
          </p>
          <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
            <!--<a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>-->
            <a href="artistpanel.php" class="w3-bar-item w3-button">Calligraphy</a>
            <a href="artistpanel.php" class="w3-bar-item w3-button">Abstract</a>
            <a href="artistpanel.php" class="w3-bar-item w3-button">Miniature</a>
            <a href="artistpanel.php" class="w3-bar-item w3-button">Landscape</a>
            <a href="artistpanel.php" class="w3-bar-item w3-button">Figurative</a>
            <a href="artistpanel.php" class="w3-bar-item w3-button">Realism</a>
          </div>
          <a href="exhibition-request.php" class="w3-bar-item w3-button" style="color:black;">Add in Exhibition</a>
          <a href="artist-sale.php" class="w3-bar-item w3-button" style="color:black;">For Sale</a>
          
          <a href="artist-sold.php" class="w3-bar-item w3-button" style="color:black;">Sold</a>
          <a href="#" class="w3-bar-item w3-button" style="color:black;">Logout</a>
        </div>
        
      </nav>
      </div>


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
        <h3 class="w3-wide" style="margin-top:5%; color:black;"><b>Category 1</b></h3>
        <hr>
      </div>
      <!-- Product grid -->

      <div class="grid">
<?php
    $id =$_SESSION['id'];
    $q="SELECT * FROM arts WHERE artistid='$id' ";
    $query= mysqli_query($conn, $q);
    while($res = mysqli_fetch_array($query))
    {
      echo "  <div class='grid-item'>
            <div class='img-container'>
              <a href='productdetail.php?id=".$res['id']."'><img class='img' src='Images/arts images/".$res['pic']."' height='280' width='260'></a>
            </div>
          </div>";
    }

?>
        </div>

        <div class="w3-container w3-text-grey" id="jeans">
            <h3 class="w3-wide" style="margin-top:5%; color:black;"><b>My All Exhibitions</b></h3>
            <hr>
            <div class="w3-container w3-text-grey sub-container" id="jeans" style="margin-top:0;">
              <div class="w3-row w3-grayscale"  style="filter:none;">
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