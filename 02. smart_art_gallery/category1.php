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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
		<link rel="stylesheet" href="stylesheet/w3.css">
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
		<?php
				require_once('headerartist.php');
		?>
			<h1>Category 1</h1>
			<hr>
		<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width: 20%;top: 11%;" id="mySidebar">
		  <div class="w3-container w3-display-container w3-padding-16">
		    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
		    <h3 class="w3-wide"><b>My Gallery</b></h3>
		    <hr>
		  </div>
		  <div class="w3-large w3-text-grey" style="font-weight:bold;">
		    <a onclick="myAccFunc()" href="#" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
		      Manage Categories <i class="fa fa-caret-down"></i>
		    </a>
		    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
		      <!--<a href="#" class="w3-bar-item w3-button w3-light-grey"><i class="fa fa-caret-right w3-margin-right"></i>Skinny</a>-->
		      <a href="category1.php" class="w3-bar-item w3-button">Category 1</a>
		      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
		      <a href="artistpanel.php" class="w3-bar-item w3-button">Category 1</a>
		    </div>
		    <a href="exhibition-request.php" class="w3-bar-item w3-button" style="color:black;">Add in Exhibition</a>
		    <a href="artist-sale.php" class="w3-bar-item w3-button" style="color:black;">For Sale</a>
		    
		    <a href="artist-sold.php" class="w3-bar-item w3-button" style="color:black;">Sold</a>
		    <a href="#" class="w3-bar-item w3-button" style="color:black;">Logout</a>
		  </div>
		  
		</nav>

	
		<div class="container" style="width: 78%;margin-left: 21%;font-size: 13px;">
		<?php
		if(isset($_SESSION['status']) && $_SESSION['status'] !='')
		{
?>
			<div class="alert alert-success alert-dismissible fade show">
    			<?php echo $_SESSION['status'];?>
    			<button type="button" class="btn-close" data-bs-dismiss="alert"></button>
			</div>
<?php
		unset($_SESSION['status']);
		}
?>
			<table class="table table-striped table-hover table-bordered">
				<tr class="text-danger text-center">
					<th>Artist</th>
					<th>Medium</th>
					<th>Size</th>
					<th>Code</th>
					<th>Price</th>
					<th>Picture</th>
					<th> Action </th>		
				</tr>
				<tr class="text-center">
				  
				<form method="POST" action= "code.php" enctype="multipart/form-data" >
					<th><input type="text" name="artist" class="form-control" placeholder="Name of Artist" required></th>
					<th><input type="text" name="medium" class="form-control" placeholder="Medium Name" required></th>
					<th><input type="text" name="size" class="form-control" placeholder="e.g; 200x200" required></th>
					<th><input type="text" name="code" class="form-control" placeholder="e.g; EX-SA-F-001" required></th>
					<th><input type="text" name="price" class="form-control" placeholder="e.g; 100$" required></th>
					<th><input type="file" name="pic" required></th>					
					<th><button type="submit" class="btn btn-success" name="add">Add New</button></th>
				</form>
				</tr>
			</table>
<?php
		if(isset($_SESSION['status']) && $_SESSION['status'] !='')
		{
?>
		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<?php echo $_SESSION['status'];?>
		<button type="button" class="close" data-dismiss="alert" >
		<span aria-hidden="true">&times;</span>
		</button>
		</div>
<?php
		unset($_SESSION['status']);
		}
?>
		<table class="table table-striped table-hover table-bordered">
				<tr class="text-danger text-center">
					<th>Artist</th>
					<th>Medium</th>
					<th>Size</th>
					<th>Code</th>
					<th>Price</th>
					<th>Picture</th>
					<th> Edit </th>
					<th> Delete </th>	
				</tr>
				<?php
					$q="SELECT * FROM arts ORDER BY id DESC";
					$qry= mysqli_query($conn, $q);
					while($res = mysqli_fetch_array($qry))
					{
?>
					<tr class="text-center">
<?php
						echo "<td>".$res['artist']."</td>";
						echo "<td>".$res['medium']."</td>";
						echo "<td>".$res['size']."</td>";
						echo "<td>".$res['code']."</td>";
						echo "<td>".$res['price']."</td>";
						echo "<td><img src='Images/arts images/".$res['pic']."' height='100 width='100'></td>";
						echo "<td><a href='edit.php?id=".$res['id']."' class='btn-info btn' >Update</a>";
						echo "<td><button class='btn-danger btn'><a href='exhibitiondelete.php?id=". $res['id']."' class='text-white'> Delete </a></button></td>";
					}
?>
				</tr>
			</table>
		</div>
<script type="text/javascript">
	function myAccFunc() {
  var x = document.getElementById("demoAcc");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

</script>
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