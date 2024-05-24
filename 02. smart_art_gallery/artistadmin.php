<?php
	session_start();
	require_once 'conn.php';
	if(isset($_POST['add']) && isset($_FILES['pic']))
	{
		echo "<pre>";
		print_r($_FILES['pic']);
		echo "</pre>";
		$img_name = $_FILES['pic']['name'];
		$img_size = $_FILES['pic']['size'];
		$tmp_name = $_FILES['pic']['tmp_name'];
		$error    = $_FILES['pic']['error'];
		if( $error === 0){
			if($img_size > 99999000){
				$er="Sorry, your file is too large.";
				header('location:artistsadmin.php?error=$er');
			}
			else{
				$img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
				$img_ex_lc = strtolower($img_ex);  
				$allowed_exs = array("jpg","jpeg","png");				
			if(in_array($img_ex_lc, $allowed_exs)){
					$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
					$img_upload_path = 'Images/Artists Images/'.$new_img_name;
					move_uploaded_file($tmp_name,$img_upload_path);
				}
			else{
					$er="You can't upload files of this type.";
					header('location:artistsadmin.php?error=$er');
				}
			}
		}
		else{
			$er="unknown error occured!";
			header('location:artistsadmin.php?error=$er');
		}
		$artist = $_POST['artist'];
		$sql="INSERT INTO artists VALUES ('NULL', '$artist', '$new_img_name')";
		mysqli_query($conn, $sql);
		header('location:artistsadmin.php');
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
			<h1 style="text-align:center; background-color:black; color:white; margin-top: 1%;">Artists</h1>
<div class="container">
		<table class="table table-striped table-hover table-bordered">
				<tr class="text-danger text-center">
					<th>Artist</th>
					<th>Picture</th>
					<th> Action </th>		
				</tr>
<?php
					$q="SELECT * FROM artists ORDER BY id DESC";
					$query= mysqli_query($conn, $q);
					while($res = mysqli_fetch_array($query))
					{
?>
					<tr class="text-center">
<?php
						echo "<td>".$res['firstname']."</td>";
						echo "<td><img src='Images/Artists Images/".$res['pic']."' height='50 width='50'></td>";
						echo "<td><button class='btn-danger btn'><a href='artistsdelete.php?id=". $res['id']."' class='text-white'> Delete </a></button></td>";
					}
?>
				</tr>
			</table>	
		</div>
	</body>
</html>