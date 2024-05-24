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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="stylesheet/collection.css" rel="stylesheet" type="text/css" >
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
		<div class="front" >
				<h1 id="title">SMART ART GALLERY</h1>
				<h1 id="collection">Collection</h1>
				<img class="w3-imagee" src="Images/Collection Images/7.jpg">
		</div>
		<div id="body">
					

			<div class="grid">
				<div class='grid-item'>
						<div class='img-container'>
							<a href="calligraphy.php"><img class="img" src="Images/calligraphy images/calligraphy.jpg"></a>
							<p class='pp'>
								<a href="calligraphy.php"><b>Calligraphy</b><br></a>
							</p>
						</div>
						<div class='img-container'>
							<a href="landscape.php"><img class="img" src="Images/landscape images/landscape.jpg"></a>
							<p class='pp'>
								<a href="landscape.php"><b>Landscape</b><br></a>
							</p>
					</div>
					<div class='img-container'>
							<a href="miniature.php"><img class="img" src="Images/miniature images/miniature.jpg"></a>
							<p class='pp'>
								<a href="miniature.php"><b>Miniature</b><br></a>
							</p>
						</div>
						<div class='img-container'>
							<a href="abstract.php"><img class="img" src="Images/abstract images/abstract.jpg"></a>
							<p class='pp'>
								<a href="abstract.php"><b>Abstract</b><br></a>
							</p>
					</div>
					<div class='img-container'>
							<a href="figurative.php"><img class="img" src="Images/figurative images/figurative.jpg"></a>
							<p class='pp'>
								<a href="figurative.php"><b>Figurative</b><br></a>
							</p>
						</div>
						<div class='img-container'>
							<a href="realism.php"><img class="img" src="Images/realism images/realism.jpg"img></a>
							<p class='pp'>
								<a href="realism.php"><b>Realism</b><br></a>
							</p>
					</div>
				</div>
			</div>
		</div>
		<?php
			require_once 'footer.php';
		?>	
	</body>
</html>	
<?php 
	}
		else
	{
		header('location:login.php');
	}
?> 