<?php
	session_start();
	require_once 'conn.php';
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$email=test_input($_POST['email']);
		$password=test_input($_POST['password']);
		//$role=test_input($_POST['role']);
		if(empty($email))
		{
			header("location:login.php?error=Email is Required");  
		}
		else if(empty($password))
		{
			header("location:login.php?error=Password is Required");
		}
		else
		{
			$password = md5($password);
			$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
			$result= mysqli_query($conn, $sql);
			if ((mysqli_num_rows($result)) === 1)
			{
				$row= mysqli_fetch_assoc($result);
				if($row['password'] === $password && $row['email'] == $email )
				{
					
					$_SESSION['name'] = $row['firstNname'];
					$_SESSION['id'] = $row['userid'];
					$_SESSION['role'] = $row['role'];
					$_SESSION['email'] = $row['email'];
					header("location:rolechecker.php");	
				}
				else
				{
					header("location:login.php?error=Incorrect Email or password");
				}	
			}
			else
			{
				header("location:login.php?error=Incorrect Email or password");
			}	
		}	
	}
	else
	{
		header("location:login.php");
	}
?>