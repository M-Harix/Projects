<?php

	session_start();
	require_once 'conn.php';
	
	if(isset($_POST['username']) && isset($_POST['password']))
		{
			$username	=	$_POST['username'];
			$password	=	$_POST['password'];
			if(empty($username))
			{
				header("location:loginartist.php?error=User Name is Required");  
			}
			else if(empty($password))
			{
				header("location:loginartist.php?error=Password is Required");
			}
			else
			{
				$sql="SELECT * FROM memberform WHERE username='$username' AND password='$password'";
				$result= mysqli_query($conn, $sql);
				if ((mysqli_num_rows($result)) === 1)
				{
					$row= mysqli_fetch_assoc($result);
					if($row['password'] === $password && $row['username'] == $username )
					{
						$_SESSION['id'] = $row['id'];
						$_SESSION['username'] = $row['username'];
						header("location:simplesidenav.php");
					}
					else
					{
						header("location:loginartist.php?error=Incorrect User name or password");
					}
				}
				else
				{
					header("location:loginartist.php?error=Incorrect User name or password");
				}
			}
		}
		else
		{
			header("location:loginartist.php");
		}
?>