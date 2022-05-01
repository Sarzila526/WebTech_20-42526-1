<?php 

	session_start();
	session_destroy();          //Log-Out
	header('location: ../views/login.php');
?>