<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("header.php");
  ?>
  
  <?php
	try {
	$db_handle = new DBController();
	
	// How many items to list per page
    $limit = 9;

	//filter free or paid videos
	$filter = filter_input(INPUT_GET, 'filter', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	
	// Find out how many items are in the table
	if (isset($filter) && $filter == 1) {
		$sql_str_total = "SELECT Set_ID FROM Images WHERE Set_Access = 'Paid'";
	}
	else if (isset($filter) && $filter == 2) {
		$sql_str_total = "SELECT Set_ID FROM Images WHERE Set_Access = 'Free'";
	}
	else {
		$sql_str_total = "SELECT Set_ID FROM Images";
	}
	$total = $db_handle->numRows($sql_str_total);

    // How many pages will there be
    $max_pages = ceil($total/ $limit);
	if ($max_pages == 0) {$max_pages = 1;}
			
 	$curr_page = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	if ($curr_page === null) { $curr_page = 1; }
	elseif ($curr_page < 1 || $curr_page > $max_pages) { $curr_page = 1; }
	
	if (isset($filter) && $filter == 1) {
		$sql_image_query = "SELECT * FROM Images WHERE Set_Access = 'Paid' ORDER BY SET_ID DESC LIMIT ".strval($limit)." OFFSET ".strval(($curr_page - 1) * 9);
	}
	else if (isset($filter) && $filter == 2) {
		$sql_image_query = "SELECT * FROM Images WHERE Set_Access = 'Free' ORDER BY SET_ID DESC LIMIT ".strval($limit)." OFFSET ".strval(($curr_page - 1) * 9);
	}
	else {
		$sql_image_query = "SELECT * FROM Images ORDER BY SET_ID DESC LIMIT ".strval($limit)." OFFSET ".strval(($curr_page - 1) * 9);
	}
	$image_sets = $db_handle->runQuery($sql_image_query);
	
	} 
	catch (Exception $e) {
		echo '<p>', $e->getMessage(), '</p>';
    }
  ?>
  
  <div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <h3 class="section-title text-center">Image Gallery</h3>      
	  <p class="text-center">Our image galleries are constantly updated for your viewing pleasure. </p>
	  <p align="right"><u><a href="?filter=2">Free</u> <a>|<a href="?filter=1"> <u>Paid<a></u></p>
      <div class="divide20"></div>
      <div class="blog grid-view col3">
        <div class="blog-posts text-boxes">
          <div class="isotope row">
		  
		  	<?php foreach ($image_sets as $row): 
			$reference = 'imagepage.php?setid='.$row["Set_ID"]; ?>
		    
            <div class="col-sm-6 col-md-4 grid-view-post">
              <div class="post">
                <figure class="main"><a href="<?php echo $reference; ?>"><img src=<?php echo $row["Set_Image"]; ?> alt="" /></a></figure>
                <div class="box text-center">
                  <h4 class="post-title"><a href="<?php echo $reference; ?>"><?php echo $row["Set_Name"]; ?></a></h4>
                  <div class="meta"><span class="date"><?php echo $row["Set_Date_Added"]; ?></span><span class="comments"><a href="<?php echo $reference; ?>">
				  <?php 
				  if ($row["Set_Access"] == 'Free') { 
					echo '<i class="icon-cc-nc"></i> Free</a></span></div>';
				  }
				  else {
					  echo '<i class="budicon-cash-dollar"></i> Paid</a></span></div>';
				  }
				  ?>
                </div>
                <!-- /.box --> 
              </div>
            </div>
            <!-- /column -->
            <?php endforeach ?>
            
          </div>
          <!-- /.isotope --> 
        </div>
        <!-- /.blog-posts -->
      </div>
      <!-- /.blog --> 
    </div>
    <!--/.container --> 
	<div class="text-center">
	  <div class="pagination">
	    <ul>
		<?php
			$range = 1;
		    // if not on page 1, don't show back links
			if ($curr_page > 1) {
				echo '<li><a href="?filter='.$filter.'&pid=1">First</a></li>';
				echo '<li><a href="?filter='.$filter.'&pid='.strval($curr_page-1).'">Prev</a></li>';
			} 

			// loop to show links to range of pages around current page
			for ($x = ($curr_page - $range); $x < (($curr_page + $range) + 1); $x++) {
			   // if it's a valid page number...
			   if (($x > 0) && ($x <= $max_pages)) {
				  // if we're on current page...
				  if ($x == $curr_page) {
					 	echo '<li class="active"><a href="?filter='.$filter.'&pid='.strval($curr_page).'"><span>'.strval($curr_page).'</span></a></li>';
				  } else {
					 echo '<li class="active"><a href="?filter='.$filter.'&pid='.strval($x).'"><span>'.strval($x).'</span></a></li>';
				  } // end else
			   } // end if 
			} // end for
			
			// if not on last page, show forward and last page links        
			if ($curr_page != $max_pages) {
				echo '<li><a href="?filter='.$filter.'&pid='.strval($curr_page+1).'">Next</a></li>';
				echo '<li><a href="?filter='.$filter.'&pid='.strval($max_pages).'">Last</a></li>';
			}
			?>
			</ul>
	  </div>
	  <!-- /.pagination --> 
	</div>
    </br>
  </div>
  <!--/.dark-wrapper -->
  
  <?php 
    require_once("footer.php");
  ?>