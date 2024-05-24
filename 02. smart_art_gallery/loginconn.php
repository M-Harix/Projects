<?php
	
	session_start();
	require_once 'conn.php';
	
		if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username	=	$_POST['username'];
			$password	=	$_POST['password'];
			$role		=	$_POST['role'];
			if(empty($username))
			{
				header("location:Login.php?error=User Name is Required");  
			}
			else if(empty($password))
			{
				header("location:Login.php?error=Password is Required");
			}
			else
			{
				$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
				$result= mysqli_query($conn, $sql);
				if ((mysqli_num_rows($result)) === 1)
				{
					$row= mysqli_fetch_assoc($result);
					if($row['password'] === $password && $row['username'] == $username )
					{
						$_SESSION['id'] = $row['id'];
						$_SESSION['role'] = $row['role'];
						$_SESSION['username'] = $row['username'];
						header("location:decision.php");
					}
					else
					{
						header("location:Login.php?error=Incorrect User name or password");
					}
				}
				else
				{
					header("location:Login.php?error=Incorrect User name or password");
				}
			}
		}
		else
		{
			header("location:Login.php");
		}
	
?>
