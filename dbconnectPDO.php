<?php
  $hostname = 'localhost';
  $username = 'admin_steven';
  $password = 'dk13admin';
  $database = 'admin_dk13';
  try {
	  $dbh = new PDO("mysql:host=$hostname;dbname=$database",$username,$password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      echo 'Connected to Database<br/>';
  }
  catch(PDOException $e)
    {
    echo $e->getMessage();
    }
	?>