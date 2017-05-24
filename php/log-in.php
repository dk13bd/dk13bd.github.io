<?php
	require_once("php/dbcontroller.php");
	$error_message=''; // Variable To Store Error Message
	
	if (isset($_POST['loginUser'])) {
		
		session_start(); // Starting Session
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
		
		if (!(isset($username)) || !(isset($password))) {
			$error_message = "Username or Password is invalid. Please contact us for assistance.";
		}
		else
		{
			$username = stripslashes($username);
			$password = stripslashes($password);
			$db_handle = new DBController();
			$select_user = "SELECT * FROM Members where password=MD5('".$password."') AND username='".$username."'";
			$result = $db_handle->runQuery($select_user);
			
			if (isset($result[0]['Username'])) {
				$_SESSION['LoginID']=$username; // Initializing Session
				header("location: profile.php"); // Redirecting To Other Page
			} 
			else 
			{
				$error_message = "Username or Password is invalid. Please contact us for assistance.";
			}
		}
	}
?>