<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("header.php");
  ?>
  
  <?php
    // How many items to list per page
    $limit = 9;
	if (preg_match("/[\w]+/", $_GET['val'])) {
		$svalue = $_GET['val'];
	}

	if (!isset($svalue)) {
		if(isset($_POST['svalue']) && (preg_match("/[\w]+/", $_POST['svalue']))){ 
			$svalue=$_POST['svalue']; 
		}
		else {
			$msg = "Please enter a valid search string containing letters or numbers only.";
		}
	}
	
	if (!isset($msg) && isset($svalue)) {

		$db_handle = new DBController();
		$sql_search = "SELECT Video_ID as Source_ID, 'video' as Source_Type, Video_Image as Cover_Image, Video_Name as Name, Video_Date_Added as Date_Added, Video_Access as Access FROM `Videos` WHERE Video_Name like '%".$svalue."%' UNION SELECT Set_ID as Source_ID, 'image' as Source_Type, Set_Image as Cover_Image, Set_Name as Name, Set_Date_Added as Date_Added, Set_Access as Access FROM `Images` WHERE Set_Name like '%".$svalue."%'";
		$total = $db_handle->numRows($sql_search);
			
		// How many pages will there be
		$max_pages = ceil($total/ $limit);
		
		$curr_page = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
		if ($curr_page === null) { $curr_page = 1; }
		elseif ($curr_page < 1 || $curr_page > $max_pages) { $curr_page = 1; }
		
		$sql_search_query = "SELECT Video_ID as Source_ID, 'video' as Source_Type, Video_Image as Cover_Image, Video_Name as Name, Video_Date_Added as Date_Added, Video_Access as Access FROM `Videos` WHERE Video_Name like '%".$svalue."%' UNION SELECT Set_ID as Source_ID, 'image' as Source_Type, Set_Image as Cover_Image, Set_Name as Name, Set_Date_Added as Date_Added, Set_Access as Access FROM `Images` WHERE Set_Name like '%".$svalue."%' ORDER BY Source_ID DESC LIMIT ".strval($limit)." OFFSET ".strval(($curr_page - 1) * 9);
		$search_result = $db_handle->runQuery($sql_search_query);
		$msg = "Search for ".$svalue." returned with ".$total." results.";
	}
  ?>
  
  <div class="offset"></div>
  <div class="dark-wrapper">
    <div class="container inner2">
      <h3 class="section-title text-center">Search Results</h3>      
	  <p class="text-center"> <?php echo $msg; ?> </p>
      <div class="divide30"></div>
      <div class="blog grid-view col3">
        <div class="blog-posts text-boxes">
          <div class="isotope row">
		  
		  	<?php foreach ($search_result as $result): 
				if ($result['Source_Type'] === "video") { $reference = 'videopage.php?vid='.$result["Source_ID"]; }
				elseif ($result['Source_Type'] === "image") { $reference = 'imagepage.php?setid='.$result["Source_ID"]; }
			?>
            <div class="col-sm-6 col-md-4 grid-view-post">
              <div class="post">
                <figure class="main"><a href="<?php echo $reference; ?>"><img src=<?php echo $result["Cover_Image"]; ?> alt="" /></a></figure>
                <div class="box text-center">
                  <h4 class="post-title"><a href="<?php echo $reference; ?>"><?php echo $result["Name"]; ?></a></h4>
                  <div class="meta"><span class="date"><?php echo $result["Date_Added"]; ?></span><span class="comments"><a href="<?php echo $reference; ?>">
				  <?php 
				  if ($result["Access"] === 'Free') { 
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
				echo '<li><a href="?val='.$svalue.'&pid=1">First</a></li>';
				echo '<li><a href="?val='.$svalue.'&pid='.strval($curr_page-1).'">Prev</a></li>';
			} 

			// loop to show links to range of pages around current page
			for ($x = ($curr_page - $range); $x < (($curr_page + $range) + 1); $x++) {
			   // if it's a valid page number...
			   if (($x > 0) && ($x <= $max_pages)) {
				  // if we're on current page...
				  if ($x == $curr_page) {
					 	echo '<li class="active"><a href="?val='.$svalue.'&pid='.strval($curr_page).'"><span>'.strval($curr_page).'</span></a></li>';
				  } else {
					 echo '<li class="active"><a href="?val='.$svalue.'&pid='.strval($x).'"><span>'.strval($x).'</span></a></li>';
				  } // end else
			   } // end if 
			} // end for
			
			// if not on last page, show forward and last page links        
			if ($curr_page != $max_pages) {
				echo '<li><a href="?val='.$svalue.'&pid='.strval($curr_page+1).'">Next</a></li>';
				echo '<li><a href="?val='.$svalue.'&pid='.strval($max_pages).'">Last</a></li>';
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
  
</main>
<!--/.body-wrapper --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
</body>
</html>