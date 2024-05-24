<?php
  session_start();
  require_once 'conn.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Smart Art Gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="Images/title.png" type="image/x-icon">
    <link rel="stylesheet" href="stylesheet/w3.css">
    <link rel="stylesheet" href="stylesheet/home.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  </head>
  
  <body>
    <div class="headingg" style="font-size: 15px;">
    <?php
    if (isset ($_SESSION['username']))
      {
        if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else
        {
          require_once 'headercustomer.php';
        }
      }
    else
    {
      require_once 'header.php';
    }

    ?>
    </div>
  <!-- Header -->
    <header class="w3-display-container w3-content w3-wide" id="home">
      <img class="w3-imagee" src="Images/Home Images/01.jpg" alt="Architecture">
      <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Smart</b></span> <span class="w3-hide-small w3-text-light-grey">Art Gallery</span></h1>
      </div>
    </header>

  <!-- Page content -->
      <div class="w3-content w3-padding" style="max-width:1564px">


      <!-- Collection Section -->
      <div class="w3-container w3-padding-32" id="projects">
          <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><a href="collection.php" style="text-decoration: none;">Collection</a></h3>
          
      </div>
      <div class="grid">
<?php

    $q="SELECT * FROM arts ORDER BY id DESC";
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


      <!-- Exhibition Section -->
      <div class="w3-container w3-padding-32" id="projects">
          <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><a href="exhibition.php" style="text-decoration: none;">Exhibition</a></h3>
          
      </div>
        <div class="w3-row-padding w3-padding-16 w3-center" id="food">
          <div class="w3-quarter">
            <img src="Images/Home Images/01.jpg" alt="Sandwich" style="width:100%">
            <h3>The Perfect Sandwich, A Real NYC Classic</h3>
            <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="Images/Home Images/01.jpg" alt="Steak" style="width:100%">
            <h3>Let Me Tell You About This Steak</h3>
            <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
          <div class="w3-quarter">
            <img src="Images/Home Images/01.jpg" alt="Cherries" style="width:100%">
            <h3>Cherries, interrupted</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
            <p>What else?</p>
          </div>
          <div class="w3-quarter">
            <img src="Images/Home Images/01.jpg" alt="Pasta and Wine" style="width:100%">
            <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
            <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
          </div>
        </div>

        <!-- Aatist Section -->
        
        <div class="w3-container w3-padding-32" id="about">
          <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><a href="artist.php" style="text-decoration: none;">Artists</a></h3>
        </div>

        <div class="w3-row-padding w3-grayscale" style="margin-bottom:5%;">
          <div class="grid">
<?php
        $q="SELECT * FROM artists ORDER BY id DESC";
        $query= mysqli_query($conn, $q);
        while($res = mysqli_fetch_array($query))
        {
          echo "  <div class='grid-item'>
                <div class='img-container'>
                  <a href='viewartist.php'><img src='Images/artists images/".$res['pic']."' class='artist-img'></a>
                </div>
                <p class='p'>
                <h3 class='artist-name'>".$res['firstname']."".$res['lastname']."</h3>
                <p></p>
                <p><button class='w3-button w3-light-grey w3-block'><a href='viewartist.php'>View</a></button></p>
              </div>";
        }
?>
        </div>
      </div>
    </div>

  <?php
        require_once 'footer.php';
  ?>
  </body>
</html>
