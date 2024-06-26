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
    	<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="stylesheet/abstract.css" rel="stylesheet" type="text/css" >	
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

		<div class="front">
			<h1 id="title">SMART ART GALLERY</h1>
			<h1 id="abstract">ABSTRACT</h1>
			<img class="w3-imagee" src="Images/abstract images/abstract.jpg">
		</div>
		<div class="body">
					
			<div class="grid">
<?php

		$q="SELECT * FROM arts WHERE type='abstract' ORDER BY id DESC";
		$query= mysqli_query($conn, $q);
		while($res = mysqli_fetch_array($query))
		{
			echo "	<div class='grid-item'>
						<div class='img-container'>
							<img class='img' src='Images/arts images/".$res['pic']."' height='480' width='360'>
								<div class='button'><a href='productdetail.php?id=".$res['id']."'> Place Order </a></div>
						</div>
						<p class='pp'>
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