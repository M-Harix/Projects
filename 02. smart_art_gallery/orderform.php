<?php
  session_start();
  require_once 'conn.php';
//  if (isset ($_SESSION['username']))
  {
?>
<html>
	<head>
		<title>Smart Art Gallery</title>
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="stylesheet/orderform.css" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
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
	<div class="order">
		<div class="rows">
		  <div class="col-75">
				<div class="containers">
<?php 

echo $_GET['id'];
					
?>
						<div class="rows">
						
						  <div class="col-50">
							<br><h2>Place Order</h2>
							<h3>Billing Address</h3>
							<label><i class="fa fa-user"></i> Full Name</label>
							<input type="text" id="fname" name="fullname" placeholder="Fahad Tariq">
							<label><i class="fa fa-envelope"></i> Email</label>
							<input type="text" id="email" name="email" placeholder="abcd@gmail.com">
							<label>Phone</label>
							<input type="tel" id="phone" name="phone" placeholder="03001234567">
							<label><i class="fa fa-address-card-o"></i> Address</label>
							<input type="text" id="adr" name="address" placeholder="street, house no.">
							<label><i class="fa fa-institution"></i> City</label>
							<input type="text" id="city" name="city" placeholder="Lahore">
							<label>State</label>
							<input type="text" id="state" name="state" placeholder="Punjab">
							
						</div> 
	  	 
							<input type='submit' value='Order' class='bttnn' name='submit'>
					
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
//		else
	{
//		header('location:login.php');
	}
?> 