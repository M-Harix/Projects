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
		<link href="stylesheet/artists.css" rel="stylesheet" type="text/css" >
		<link href="fontawesome-free-6.2.0-web/css/all.min.css">
	</head>
	<body style="background-color:e7e7e7">
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
				<h1 id="artists">Artists</h1>
				<img class="w3-imagee" src="Images/artists images/07.png">
		</div> 
		<div id="body">

			<div class="grid">
<?php
				$q="SELECT * FROM artists ORDER BY id DESC";
				$query= mysqli_query($conn, $q);
				while($res = mysqli_fetch_array($query))
				{
					echo "	<div class='grid-item'>
								<div class='img-container'>
									<a href='viewartist.php?id=".$res['id']."'><img class='img' src='Images/artists images/".$res['pic']."' height='200' width='200'></a>
								</div>
								<div class='p'>
									<a href='viewartist.php?id=".$res['id']."'>".$res['firstname']."".$res['lastname']."<br></a>
								</div>
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