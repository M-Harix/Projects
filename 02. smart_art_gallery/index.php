<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Smart Art Gallery</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="stylesheet/index.css">
   </head>
   <body>
      <div class="hero">
         <video class="back-video" autoplay loop muted plays-inline>
            <source src="Images/video1.mp4" type="video/mp4">
         </video>
         <header>
            <?php
               require_once('header.php');
            ?>
         </header>
         <div class="content">
            <h1>Smart Art Gallery</h1>
            <a href="home.php">Explore</a>
         </div>
      </div>
   </body>
</html>

