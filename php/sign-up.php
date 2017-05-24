<?php
if (isset($_POST['SubmitUser'])) {
	
	/* Form Required Field Validation */
	$contact_fname = filter_input(INPUT_POST, 'FirstName', FILTER_SANITIZE_STRING);
	$contact_lname = filter_input(INPUT_POST, 'LastName', FILTER_SANITIZE_STRING);
	$contact_email = filter_input(INPUT_POST, 'Email', FILTER_SANITIZE_STRING);
	$contact_username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$contact_password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	$contact_password_confirm = filter_input(INPUT_POST, 'confirm_password', FILTER_SANITIZE_STRING);
	
	if(empty($contact_fname) || empty($contact_lname) || empty($contact_email) || 
		empty($contact_username) || empty($contact_password) || empty($contact_password_confirm))  {
		$message = 7;
	}

	
	/* Validation to check if Terms and Conditions are accepted */
	if(!isset($message)) {
		if(!isset($_POST["terms"])) {
			$message = 5;
		}
	}
	
	/* Password Matching Validation */
	if(!isset($message)) {
		if ($contact_password != $contact_password_confirm){ 
			$message = 2;
		}		
	}

	/* Email Validation */
	if(!isset($message)) {
		if (!filter_var($contact_email, FILTER_VALIDATE_EMAIL)) {
			$message = 3;
		}
	}

	/* Password Length Validation */
	if(!isset($message)) {
		if (strlen($contact_password) < 6){ 
			$message = 8;
		}		
	}
	
	/* Validation to check if username already exists */
	if(!isset($message)) {
		require_once("php/dbcontroller.php");
		$db_handle = new DBController();
		$query = "SELECT * FROM Members WHERE Username = '".$contact_username."'";
		$result = $db_handle->numRows($query);
		if($result > 0) {
			$message = 4;
		}
	}



	if(!isset($message)) {
		require_once("php/dbcontroller.php");
		$db_handle = new DBController();
		$query = "INSERT INTO Members (First_Name, Last_Name, Username, Password, Signup_Date,  Email) VALUES
		('" . $contact_fname . "', '" . $contact_lname . "', '" . $contact_username . "', '" . md5($contact_password) . "', NOW(), '" . $contact_email . "')";
		$result = $db_handle->insertQuery($query);
		if(!empty($result)) {
			$message = 1;	
			unset($_POST);
		} else {
			$message = 6;	
		}
	}
}
?>