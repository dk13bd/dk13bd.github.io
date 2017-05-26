<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	require_once("php/dbcontroller.php");
	require_once("header.php");
  ?>
  
  <?php
  try {
	session_start();// Starting Session
	$db_handle = new DBController();
	
	$video_id = filter_input(INPUT_GET, 'vid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	
    $sql_video_query = "SELECT * FROM Videos WHERE Video_ID ='".strval($video_id)."'";
	$video_row = $db_handle->runQuery($sql_video_query);
	
	$video_access = $video_row[0]["Video_Access"];
	$user_access = $_SESSION['Access'];

   }
	catch (Exception $e) {
		echo '<p>', $e->getMessage(), '</p>';
    }
  ?>
  
  <div class="offset"></div>
  <div class="light-wrapper">
    <div class="container inner">
	  <div class="videoWrapper">
		<?php 
		if ($video_access === 'Free' || $user_access === 'Monthly Full Member' || $user_access === 'Seasonal Full Member')
		{
			echo $video_row[0]['Video_Link'];
		}
		else {
			echo '<h5 style="color:red;">You do not have sufficient access to see this video. Please login or purchase one of our membership plans.</h5>';
		}
		?>
	  </div>
      <div class="divide30"></div>
      <h2 class="post-title"> <?php if (isset($video_row[0])) {echo $video_row[0]['Video_Name'];}?> </h2>
      <div class="meta"><span class="date"> <?php if (isset($video_row[0])) {echo $video_row[0]['Video_Date_Added'];}?>
	  </span><span>
	  <?php
	  	  if ($video_access === 'Free') { 
			echo '<i class="icon-cc-nc"></i> Free</span></div>';
		  }
		  else {
			  echo '<i class="budicon-cash-dollar"></i> Paid</span></div>';
		  }
	  ?>
      <p><?php if (isset($video_row[0])) {echo $video_row[0]['Video_Desc'];}?></p>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.light-wrapper -->

  <?php 
    require_once("footer.php");
  ?>