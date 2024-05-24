<?php
  session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Smart Art Gallery</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="stylesheet/about.css" rel="stylesheet" type="text/css" >
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
				<h1 id="about">About</h1>
				<img class="w3-imagee" src="Images/About Us Images/31.jpg">
		</div>
	<div class="all">
		<div class="pimg">
			<div id="im">
				<img id="img" src="Images/About Us Images/pp.jpg">
				<h5 id="h5" style="margin-left: 15%;">&nbsp Smart Art Gallery</h5>
			</div>
			<p id="p">Smart Art Gallery was initially opened in 1991 inspired by the diverse talent shown by artists in Pakistan from all regions of the 
			country. We enjoyed a liaison with artists and the patrons whose presence initiated exhibitions here.
			Smart Art Gallery is well known for having some of the most prestigious painting ever painted by Pakistani artists.The gallery continuously 
			strives to maintainbest relationships with the artists to ensure that customers get the best work. We are honored that Colins last three 
			exhibitions took place at the gallery, 
			and drew the interest of students and art connoisseurs alike.
			Our customers feel secure in buying paintings from us because we maintain a reputation in the art industry and have strict measures to ensure 
			that only original paintings are delivered to them. Every painting is delivered with utmost care. We welcome you to visit our gallery 
			and be the better judge.
			<br><b>Mohammad Rizwan Zakai</b> Director Smart Art Gallery.<br>
			</p>
			
		</div>
		<p id="why">Why Smart Art Gallery?</p>
		<div class="detail">
		
		<dl>
			<dt><h3>Global Selection</h3></dt>
			<dd>We have an unparalleled selection of paintings, photography, sculpture, and drawings.</dd>

			<dt><h3>Satisfaction Guaranteed</h3></dt>
			<dd>Our 7-day 100% money-back guarantee allows you to buy with confidence.<br>
			If for any reason you’re not satisfied with your purchase, return it and we’ll help you find a work you love.</dd>

			<dt><h3>No Advisory Fees</h3></dt>
			<dd>Our personalized art advisory service gives you access to your own expert curator, free of charge.</dd>

			<dt><h3>Original Art for Any Budget</h3></dt>
			<dd>Smart Art features works at a wide range of prices to suit all budgets and projects.</dd>

			<dt><h3>Global Shipping</h3></dt>
			<dd>We handle all aspects of international shipping and customs for a completely hassle-free delivery.</dd>
			
		</dl>
			<div id="dimg">
				<img id="imgage" src="Images/About Us Images/ab.jpg">
			</div>
		</div>
	</div>
		<?php
			require_once 'footer.php';
		?>
	</body> 
</html>