<?php
	session_start();
	$_SESSION = array();
	header("Location: index.php"); // Redirecting To Home Page
?>