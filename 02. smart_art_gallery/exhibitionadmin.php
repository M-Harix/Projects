<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
		if($_SESSION['role'] == 'admin')
		{
	
	if(isset($_POST['add']) && isset($_FILES['pic']))
	{ 
		$file_name = $_FILES['pic']['name'];
		$tmp_name = $_FILES['pic']['tmp_name'];
		$folder = "Images/Exhibition Images/".$file_name;
		echo $folder;
		move_uploaded_file($tmp_name,$folder);
		
		
		$artist = $_POST['artist'];
		$medium = $_POST['medium'];
		$size   = $_POST['size'];
		$code   = $_POST['code'];
		$price	= $_POST['price'];
		$sql="INSERT INTO exhibition VALUES ('NULL', '$artist', '$medium', '$size', '$code', '$price', '$file_name')";
		mysqli_query($conn, $sql);
		header('location:exhibitionadmin.php');
	}
?>


<html>
	<head>
		<title>Smart Art Gallery</title>
		<link rel="icon" href="Images/title.png" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<header>
			<?php
				require_once('headeradmin.php');
			?>
		</header>
		<h1 style="text-align:center; background-color:black; color:white; margin-top: 1%;">Exhibition</h1>
	<div class="container">
			<table class="table table-striped table-hover table-bordered">
				<tr class="text-danger text-center">
					<th>Artist</th>
					<th>Medium</th>
					<th>Size</th>
					<!-- <th>Code</th> -->
					<th>Price</th>
					<th>Picture</th>
					<th colspan="2"> Action </th>		
				</tr>
				<tr class="text-center">
				<form method="POST" enctype="multipart/form-data" >
					<th><input type="text" name="artist" class="form-control" placeholder="Name of Artist" required></th>
					<th><input type="text" name="medium" class="form-control" placeholder="Medium Name" required></th>
					<th><input type="text" name="size" class="form-control" placeholder="e.g; 200x200" required></th>
					<!-- <th><input type="text" name="code" class="form-control" placeholder="e.g; EX-SA-F-001" required></th> -->
					<th><input type="text" name="price" class="form-control" placeholder="e.g; 100$" required></th>
					<th><input type="file" name="pic" required></th>					
					<th colspan="2"><button type="submit" class="btn btn-success" name="add">Add New</button></th>
				</form>
				</tr>
<?php
					$q="SELECT * FROM exhibition_arts ORDER BY id DESC";
					$qry= mysqli_query($conn, $q);
					while($res = mysqli_fetch_array($qry))
					{
?> 
					<tr class="text-center">
<?php
						echo "<td>".$res['artist']."</td>";
						echo "<td>".$res['medium']."</td>";
						echo "<td>".$res['size']."</td>";
						// echo "<td>".$res['code']."</td>";
						echo "<td>".$res['price']."</td>";
						echo "<td><img src='Images/Exhibition Images/".$res['pic']."' height='100 width='100'></td>";
?>
						<td>
						<form action="exhibitionupdate.php" method="POST">
							<input type="hidden" name="update_id" value="<?php echo $res['id']; ?>">
							<button type="submit" name="update_btn" class="btn-info btn" > Update</button>
						</form>
						</td>
<?php
						echo "<td><button class='btn-danger btn'><a href='exhibitiondelete.php?id=". $res['id']."' class='text-white'> Delete </a></button></td>";
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