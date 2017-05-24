<?php
	require_once("php/dbcontroller.php");
	session_start();// Starting Session
	$db_handle = new DBController();
	// Storing Session
	$user_check=$_SESSION['LoginID'];
	// SQL Query To Fetch Complete Information Of User
	$sql_user="SELECT * FROM Members WHERE Username='".$user_check."'";
	$result = $db_handle->runQuery($sql_user);
	if (isset($result[0]['Username'])) {
		$_SESSION['FirstName']=$result[0]['First_Name'];
		$_SESSION['LastName']=$result[0]['Last_Name'];
		$_SESSION['Access']=$result[0]['Account_Level']; 
		$_SESSION['Expire']=$result[0]['Expire_Date']; 
	} 
	else {
		header('Location: index.php'); // Redirecting To Home Page
	}
?>