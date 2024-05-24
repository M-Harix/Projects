<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="col-lg12 m-auto">
				<br><br>
				<h1 class="text-warning text-center"> Display Table Data</h1>
				<br>
				<table class="table table-striped table-hover table-bordered">
					<tr class="bg-dark text-white text-center">
						
						<th> R # </th>
						<th> Username </th>
						<th> Password </th>
						<th colspan="2"> Operation </th>
						
						
					</tr>
					<?php
						
						require_once 'login.php';	
						$q="SELECT * FROM users";
						$query= mysqli_query($conn, $q);
						while($res = mysqli_fetch_array($query))
						{
?>
						
							<tr class="text-center">
<?php
							echo "<td>".$res['id']."</td>";
							echo "<td>".$res['username']."</td>";
							echo "<td>".$res['password']."</td>";
							echo "<td><button class='btn-danger btn'><a href='delete.php?id=". $res['id']."' class='text-white'> Delete </a></button> </td>";
							echo "<td><button class='btn-primary btn'><a href='update.php?id=". $res['id']."' class='text-white'> Update </a></button> </td> </tr>";
						}
					?>
				</table>
			</div>
		</div>
	</body>
</html>