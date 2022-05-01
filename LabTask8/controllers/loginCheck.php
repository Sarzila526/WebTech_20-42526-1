<?php 
	session_start();
	require('../models/model.php');
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != null && $password != null)
		{
			$status = login($username, $password);
			if($status)
			{
				$_SESSION['status'] = true;
				setcookie('status', 'true', time()+3600, '/');
				$_SESSION['username'] = $username;
				setcookie("username", $uname, time() +60*60*7);
                setcookie("password", $psword, time() +60*60*7);
				header('location: ../views/dashboard.php');
			} else
			{
				$err = 'Invalid User Name or Password!';
				unset($_COOKIE["username"]);
				unset($_COOKIE["password"]);
        		echo "<script>alert('$err'); </script>";
			}
		}
		else
		{
			echo "<script>alert('Null submission!'); </script>";
		}
	
?>