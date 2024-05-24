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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="stylesheet/ex-available.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<div class="header" id="myHeader">
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
		<div class="front">
				<h1 id="title">SMART ART GALLERY</h1>
				<h3 id="ex">Exhibition-Name</h3>
				<img class="w3-imagee" src="Images/exhibition images/dd.jpg">
		</div>
		<div class="body">
			<div class="grid">
<?php

		$q="SELECT * FROM arts ORDER BY id DESC";
		$query= mysqli_query($conn, $q);
		while($res = mysqli_fetch_array($query))
		{
			echo "	<div class='grid-item'>
						<div class='img-container'>
							<img class='img' src='Images/arts images/".$res['pic']."' height='480' width='360'>
						</div>
						<p class='p'>
							
							<b>Artist:</b> ".$res['artist']."<br>
							<b>Medium:</b> ".$res['medium']."<br>
							<b>Size:</b> 	".$res['size']."<br>
							<b>Price:</b> 	".$res['price']."<br>
						</p>
					</div>";
		}
?>
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