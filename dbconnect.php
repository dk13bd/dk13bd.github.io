<?php
  private $hostname = 'localhost';
  $username = 'admin_steven';
  $password = 'dk13admin';
  $database = 'admin_dk13';
	$dbconnect = mysqli_connect($hostname, $username, $password, $database);
	if (mysqli_connect_errno()) {
			echo "Connection failed:".mysqli_connect_error();
			exit;
	}
	?>