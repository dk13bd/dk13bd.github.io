<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("header.php");
  ?>
  
	<?php
	session_start();
	if (isset($_SESSION['LoginID'])) {
		$btn = '<div class="panel-footer"> <a href="" class="btn" role="button">Paypal</a></div>';
	}
	else {
		$btn = '<div class="panel-footer"> <a href="signup.php" class="btn" role="button">Sign Up</a></div>';

	}
	?>
  
  <div class="divide50"></div>
  <div class="dark-wrapper">
    <div class="container inner">
      <h3 class="section-title text-center">Membership Fees</h3>
	  <p class="text-center">Due to the nature of the business, we kindly ask you to pay via Paypal gift to avoid extra fees which will then increase our service fees as well. </br>During the payment process on Paypal, attach a note with your account username and email. Please allow a 6-12 hour delay to update your account status. </br> Feel free to contact us at <a href="mailto:dk13photostudio@gmail.com">dk13photostudio@gmail.com</a> if you experience any issues.</p>
      <div class="row">
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Monthly Photo Membership</h3>
              <div class="price"> <span class="price-currency">$</span> <span class="price-value">5</span> </div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>Duration:</strong> 1 Month</td>
                </tr>
				<tr>
                  <td><strong>Access:</strong> paid photo galleries</td>
                </tr>
                <tr>
                  <td><strong>Including:</strong> 1000+ HD photos</td>
                </tr>
                <tr>
                  <td><strong>Receive:</strong> weekly updates to our new galleries</td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
            <?php echo $btn; ?>
          </div>
          <!--/.pricing --> 
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Monthly Full Membership</h3>
              <div class="price"> <span class="price-currency">$</span> <span class="price-value">10</span> </div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>Duration:</strong> 1 Month</td>
                </tr>
				<tr>
                  <td><strong>Access:</strong> paid photo and video galleries</td>
                </tr>
                <tr>
                  <td><strong>Including:</strong> 100+ HD videos, 1000+ HD photos</td>
                </tr>
                <tr>
                  <td><strong>Receive:</strong> weekly updates to our new galleries</td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
            <?php echo $btn; ?>
          </div>
          <!--/.pricing --> 
        </div>
        <!--/column -->
        <div class="col-sm-4">
          <div class="pricing panel">
            <div class="panel-heading">
              <h3 class="panel-title">Seasonal Full Membership</h3>
              <div class="price"> <span class="price-currency">$</span> <span class="price-value">30</span> </div>
            </div>
            <!--/.panel-heading -->
            <div class="panel-body">
              <table class="table">
                <tr>
                  <td><strong>Duration:</strong> 4 Month</td>
                </tr>
				<tr>
                  <td><strong>Access:</strong> paid photo and video galleries</td>
                </tr>
                <tr>
                  <td><strong>Including:</strong> 100+ HD videos, 1000+ HD photos</td>
                </tr>
                <tr>
                  <td><strong>Bonus:</strong> immediate access to new galleries</td>
                </tr>
              </table>
            </div>
            <!--/.panel-body -->
			<?php echo $btn; ?>
          </div>
          <!--/.pricing --> 
        </div>
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <?php 
    require_once("footer.php");
  ?>