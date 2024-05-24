<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
		if($_SESSION['role'] == 'admin')
		{
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
		<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
	</head>
	<body>
<?php
	require_once 'headeradmin.php';
?>
		<h1 style="text-align:center; padding-top: 15px; height:80px; margin-top: 2%;">Manage Arts</h1>
	
		<div class="container">
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
			<table class="table table-striped table-hover table-bordered" style="width:100%;">
				<tr class="text-danger text-center">
					
					<th>Type</th>
					<th>Artist</th>
					<th>Medium</th>
					<th>Size</th>
					<!-- <th>Code</th> -->
					<th>Price</th>
					<th>Picture</th>						
					<th>Action</th>
				</tr>
				<tr class="text-center">
				  
				<form method="POST" action= "arts-insert.php" enctype="multipart/form-data" >

					<th>
						<select name="type" class="form-control" required>
						    <option value="calligraphy">Calligraphy</option>
						    <option value="miniature">Miniature</option>
						    <option value="landscape">Landscape</option>
						    <option value="figurative">Figurative</option>
						    <option value="abstract">Abstract</option>
						    <option value="realism">Realism</option>
						</select>

					</th>
					<th><input type="text" name="artist" class="form-control" placeholder="Artist Name" required></th>
					<th><input type="text" name="medium" class="form-control" placeholder="Medium Name" required></th>
					<th><input type="text" name="size" class="form-control" placeholder="e.g; 200x200" required></th>
					<!-- <th><input type="text" name="code" class="form-control" placeholder="e.g; EX-SA-F-001" required></th> -->
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
					<th>Type</th>
					<th>Artist</th>
					<th>Medium</th>
					<th>Size</th>
					<!-- <th>Code</th> -->
					<th>Price</th>
					<th>Status</th>
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
						echo "<td>".$res['type']."</td>";
						echo "<td>".$res['artist']."</td>";
						echo "<td>".$res['medium']."</td>";
						echo "<td>".$res['size']."</td>";
						// echo "<td>".$res['code']."</td>";
						echo "<td>".$res['price']."</td>";
						echo "<td>".$res['status']."</td>";
						echo "<td><img src='Images/arts images/".$res['pic']."' height='100 width='100'></td>";
						echo "<td><a href='arts-edit.php?id=".$res['id']."' class='btn-info btn' >Update</a>";
						echo "<td><button class='btn-danger btn'><a href='arts-delete.php?id=". $res['id']."&pic=".$res['pic']."' class='text-white'> Delete </a></button></td>"; 
					}
?>
				</tr>
			</table>
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