<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("header.php");
  ?>
  
  <?php
	try {
	$db_handle = new DBController();
	
    // Find out how many items are in the table
	$sql_str_total = "SELECT Model_ID FROM Models";
	$total = $db_handle->numRows($sql_str_total);

    // How many items to list per page
    $limit = 9;
	
    // How many pages will there be
    $max_pages = ceil($total/ $limit);
	if ($max_pages == 0) {$max_pages = 1;}
	
 	$curr_page = filter_input(INPUT_GET, 'pid', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
	if ($curr_page === null) { $curr_page = 1; }
	elseif ($curr_page < 1 || $curr_page > $max_pages) { $curr_page = 1; }
	
    $sql_str_models = "SELECT * FROM Models ORDER BY Model_ID DESC LIMIT ".strval($limit)." OFFSET ".strval(($curr_page - 1) * 9);
	$sql_models = $db_handle->runQuery($sql_str_models);
	$model_page = true;
	} 
	catch (Exception $e) {
		echo '<p>', $e->getMessage(), '</p>';
    }
  ?>
  
  <div class="offset"></div>
  <div class="light-wrapper">
    <div class="container inner2">
      <h3 class="section-title text-center">Model Gallery</h3>
      <p class="text-center">Check out some of our sexiest and hottest models </p>
      <div class="divide30"></div>
      <div id="slide-portfolio" class="image-grid col3">
        <div class="items-wrapper">
          <ul class="isotope items">
		  
		    <?php foreach ($sql_models as $row): ?>
			
            <li class="item">
              <figure class="icon-overlay"><a href="#0" data-type="slide-portfolio-item-<?php echo $row["Model_ID"]; ?>"><img src=<?php echo $row["Small_Image"]; ?> alt="" /></a></figure>
              <div class="slide-portfolio-item-info box">
                <h4 class="post-title"> <?php echo $row["Model_Name"]; ?>
				</h4>
              </div>
            </li>
			
			<?php endforeach ?>
			
          </ul>
        </div>
        <!--/.items-wrapper --> 
	
      </div>
      <!-- slide-portfolio --> 
	  


    </div>
    <!-- /.container --> 
    <div class="text-center">
	  <div class="pagination">
	    <ul>
		<?php
			$range = 1;
		    // if not on page 1, don't show back links
			if ($curr_page > 1) {
				echo '<li><a href="?pid=1">First</a></li>';
				echo '<li><a href="?pid='.strval($curr_page-1).'">Prev</a></li>';
			} 

			// loop to show links to range of pages around current page
			for ($x = ($curr_page - $range); $x < (($curr_page + $range) + 1); $x++) {
			   // if it's a valid page number...
			   if (($x > 0) && ($x <= $max_pages)) {
				  // if we're on current page...
				  if ($x == $curr_page) {
					 	echo '<li class="active"><a href="?pid='.strval($curr_page).'"><span>'.strval($curr_page).'</span></a></li>';
				  } else {
					 echo '<li class="active"><a href="?pid='.strval($x).'"><span>'.strval($x).'</span></a></li>';
				  } // end else
			   } // end if 
			} // end for
			
			// if not on last page, show forward and last page links        
			if ($curr_page != $max_pages) {
				echo '<li><a href="?pid='.strval($curr_page+1).'">Next</a></li>';
				echo '<li><a href="?pid='.strval($max_pages).'">Last</a></li>';
			}
			?>
			</ul>
	  </div>
	  <!-- /.pagination --> 
	</div>
    </br>
  </div>
  <!-- /.dark-wrapper -->
  
  
  <?php 
    require_once("footer.php");
  ?>
  
  <div class="slide-portfolio-overlay"></div><!-- overlay that appears when slide portfolio content is open -->
</main>
<!--/.body-wrapper -->
  
	<?php foreach ($sql_models as $row):?>
			
	<div class="slide-portfolio-item-content dark-wrapper slide-portfolio-item-<?php echo $row["Model_ID"]; ?>">
	  <div class="slide-portfolio-item-detail">
		<div class="inner2">
		  <h2 class="text-center"><?php echo $row["Model_Name"]; ?></h2>
		  <p class="text-center"><?php echo $row["Model_Desc"]; ?></p>
		  <div class="divide25"></div>
		  <ul class="basic-gallery text-center">
		  <li><img src="<?php echo $row["Large_Image_1"]; ?>" alt=""></li>
		  <li><img src="<?php echo $row["Large_Image_2"]; ?>" alt=""></li>
		  <li><img src="<?php echo $row["Large_Image_3"]; ?>" alt=""></li>
		  <li><img src="<?php echo $row["Large_Image_4"]; ?>" alt=""></li>
		  <li><img src="<?php echo $row["Large_Image_5"]; ?>" alt=""></li>
		  </ul>
		</div>
		<!-- .inner --> 
	  </div>
	  <!-- slide-portfolio-item-detail --> 
	</div>
	<!-- slide-portfolio-item-content -->

	<?php endforeach ?>

<a href="#0" class="slide-portfolio-item-content-close"><i class="budicon-cancel-1"></i></a> <!-- close slide portfolio content --> 
<script src="style/js/jquery.min.js"></script> 
<script src="style/js/bootstrap.min.js"></script> 
<script src="style/js/plugins.js"></script> 
<script src="style/js/classie.js"></script> 
<script src="style/js/jquery.themepunch.tools.min.js"></script> 
<script src="style/js/scripts.js"></script>
<script src="https://use.fontawesome.com/29956240d5.js"></script>
</body>
</html>