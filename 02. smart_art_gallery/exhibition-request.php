<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if($_SESSION['role'] == 'artist')
    {
?>
<html>
	<head>
		<title>Smart Art Gallery</title>
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="stylesheet/exhibition-request.css" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
	</head>		
	<body>
<?php
      require_once 'headerartist.php';
?>
	<div class="order">
		<div class="rows">
		  <div class="col-75">
			<div class="containers">
			  <form action="/action_page.php">

				<div class="rows">
				
				  <div class="col-50" style="font-size: 20px;">
				  	<br><h1 style="text-align: center; height:70px;">Upcoming Exhibition</h1>
				  	<hr>
					<label>Artist Name</label>
					<input type="text" name="name">
					<label>Medium</label>
					<input type="text" name="medium">
					<label>Size</label>
					<input type="text" name="size">
					<label>Code</label>
					<input type="text" name="code">
				  <label>Price</label>
				  <input type="text" name="price">
				  <label>Picture</label>
				  <input type="file" name="pic" required><br>
					

				
				  <input type="submit" value="Send Request" class="bttnn" name="submit">
				</div>
			  </form>
			</div>
		  </div>
		</div>
	</div>
		<div class="footer">
			<?php
			//	require_once 'footer.php';
			?>
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