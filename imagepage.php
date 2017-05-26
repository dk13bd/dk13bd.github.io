<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("header.php");
  ?>
  
  <?php
  try {
	session_start();// Starting Session
	$db_handle = new DBController();
	
	$set_id = filter_input(INPUT_GET, 'setid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	
 	$curr_page = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	
    $sql_image_query = "SELECT * FROM Images WHERE SET_ID ='".strval($set_id)."'";
	$image_set = $db_handle->runQuery($sql_image_query);
	$set_access = $image_set[0]["Set_Access"];
	$user_access = $_SESSION['Access'];

	// How many items to list per page
	$limit = 12;
	
	if ($set_access === 'Free' || $user_access === 'Monthly Photo Member' || 
	$user_access === 'Monthly Full Member' || $user_access === 'Seasonal Full Member') {
		$files = glob($image_set[0]['Set_Location']."/*.{jpg,png,gif}", GLOB_BRACE);
		$total = count($files);
		$has_access = true;
		$max_pages = ceil($total/ $limit);
	}
	else {
		$has_access = false;
		$max_pages = 1;
	}
		
		if ($curr_page === null) { $curr_page = 1; }
		elseif ($curr_page < 1 || $curr_page > $max_pages) { $curr_page = 1; }
		$file_num = 1;
   }
	catch (Exception $e) {
		echo '<p>', $e->getMessage(), '</p>';
    }
  ?>
  <div class="divide50"></div>
  <section id="landscape" class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center"><?php echo $image_set[0]["Set_Name"]; ?></</h3>
      <div class="divide50"></div>
	  <?php if (!($has_access)) { echo '<h5 class="text-center" style="color:red;">You do not have sufficient access to see this gallery. Please login or purchase one of our membership plans.</h5>'; } ?>
      <div class="cbp-panel">
        <div class="cbp cbp-onepage-grid">
		
		  <?php foreach($files as $file): 
		    if ($file_num <= ($curr_page-1)*$limit) {$file_num = $file_num+1;continue;}
		    if ($file_num > $curr_page*$limit) {break;} 
			$file_num = $file_num+1;
		  ?>
		  
          <div class="cbp-item"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href=<?php echo "$file";?> >
            <div class="cbp-caption-defaultWrap"> <img src=<?php echo "$file";?> alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a> </div>
          <!--/.cbp-item -->
		  <?php endforeach ?>
          
          
        </div>
        <!--/.cbp --> 
        
      </div>
      <!--/.cbp-panel --> 
    </div>
    <!-- /.container --> 
	<div class="text-center">
	  <div class="pagination">
	    <ul>
		<?php
			$range = 1;
		    // if not on page 1, don't show back links
			if ($curr_page > 1) {
				echo '<li><a href="?setid='.$set_id.'&pid=1">First</a></li>';
				echo '<li><a href="?setid='.$set_id.'&pid='.strval($curr_page-1).'">Prev</a></li>';
			} 

			// loop to show links to range of pages around current page
			for ($x = ($curr_page - $range); $x < (($curr_page + $range) + 1); $x++) {
			   // if it's a valid page number...
			   if (($x > 0) && ($x <= $max_pages)) {
				  // if we're on current page...
				  if ($x == $curr_page) {
					 echo '<li class="active"><a href="?setid='.$set_id.'&pid='.strval($curr_page).'"><span>'.strval($curr_page).'</span></a></li>';
				  } 
				  else {
					 echo '<li class="active"><a href="?setid='.$set_id.'&pid='.strval($x).'"><span>'.strval($x).'</span></a></li>';
				  } // end else
			   } // end if 
			} // end for
			
			// if not on last page, show forward and last page links        
			if ($curr_page != $max_pages) {
				echo '<li><a href="?setid='.$set_id.'&pid='.strval($curr_page+1).'">Next</a></li>';
				echo '<li><a href="?setid='.$set_id.'&pid='.strval($max_pages).'">Last</a></li>';
			}
			?>
			</ul>
	  </div>
	  <!-- /.pagination --> 
	</div>
    </br>
  </section>
  <!-- /#landscape -->
  
  <?php 
    require_once("footer.php");
  ?>