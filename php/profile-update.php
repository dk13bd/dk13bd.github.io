<?php

if (isset($_POST['SavePassword'])) {
	session_start();// Starting Session
	$contact_username = $_SESSION['LoginID'];
	$contact_password = filter_input(INPUT_POST, 'new_password', FILTER_SANITIZE_STRING);
	$contact_password_confirm = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
	
	if(empty($contact_password) || empty($contact_password_confirm) || empty($contact_username))  {
		$password_error = "Please verify the password fields are not empty.";
	}

	/* Password Matching Validation */
	if(!isset($message)) {
		if ($contact_password != $contact_password_confirm){ 
			$message = "Passwords should be same.";
		}		
	}
	
	
	/* Password Length Validation */
	if(!isset($password_error)) {
		if (strlen($contact_password) < 6){ 
			$password_error = "Password must be atleast 6 characters.";
		}		
	}

	if(!isset($message)) {
		require_once("php/dbcontroller.php");
		$db_handle = new DBController();
		$query = "SELECT * FROM Members WHERE Username = '".$contact_username."'";
		$result = $db_handle->numRows($query);
		if($result != 1) {
			$password_error = "Username does not exist.";
		}
		else {
			$query = "UPDATE Members SET password = '".md5($contact_password)."' WHERE Username = '".$contact_username."'";
			$result = $db_handle->updateQuery($query);
			if(!empty($result)) {
				$password_success = "Password was successfully updated.";	
			unset($_POST);
			} 
			else 
			{
				$password_error = "The server is experiencing some issues, please try again later!";	
			}
		}
	}
}

if (isset($_POST['SaveEmail'])) {
	session_start();// Starting Session
	$contact_username = $_SESSION['LoginID'];
	$contact_email = filter_input(INPUT_POST, 'newemail', FILTER_SANITIZE_STRING);
	
	if(empty($contact_email) || empty($contact_username))  {
		$email_error = "Please verify the email field is not empty.";
	}

	/* Email Validation */
	if(!isset($message)) {
		if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
			$email_error = "Invalid email address.";
		}
	}

	if(!isset($message)) {
		require_once("php/dbcontroller.php");
		$db_handle = new DBController();
		$query = "SELECT * FROM Members WHERE Username = '".$contact_username."'";
		$result = $db_handle->numRows($query);
		if($result != 1) {
			$email_error = "Username does not exist.";
		}
		else {
			$query = "UPDATE Members SET Email = '".$contact_email."' WHERE Username = '".$contact_username."'";
			$result = $db_handle->updateQuery($query);
			if(!empty($result)) {
				$email_success = "Email was successfully updated.";	
			unset($_POST);
			} 
			else 
			{
				$email_error = "The server is experiencing some issues, please try again later!";	
			}
		}
	}
}
?>