<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
?>
<!DOCTYPE html>
<html>
<head>
<title>Smart Art Gallery</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylesheet/w3.css">
<style>
body,h1 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-color: black;
  min-height: 100%;
  background-position: center;
  background-size: cover;
}
</style>
</head>
<body>
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
<div class="bgimg w3-display-container w3-animate-opacity w3-text-white">
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top">COMING SOON</h1>
    <hr class="w3-border-grey" style="margin:auto;width:40%">
    <p class="w3-large w3-center">35 days left</p>
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
?>