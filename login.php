<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("php/log-in.php");
	require_once("header.php");
  ?>
  
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/parallax1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Account Login</h2>
        <p class="lead">Login to check your account status and get access to more content!</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title">Login</h3>
        <div class="divide30"></div>
        <div class="form-container">
          <form name="logging_in" method="post">
			<div class="row">
			  <div class="col-sm-4">
				<div class="form-field">
				  <label>
					<input type="text" name="username" placeholder="Username" required="required" maxlength="30">
				  </label>
				</div>
				<!--/.form-field --> 
			  </div>
			  <!--/column -->
			</div>
			<div class="row">
			  <div class="col-sm-4" >
				<div class="form-field">
				  <label>
					<input type="password" name="password" placeholder="Password" required="required" maxlength="30">
				  </label>
				</div>
				<!--/.form-field --> 
			  </div>
			  <!--/column -->
			</div>
			<div class="divide20"></div>
			<input type="submit" class="btn" name="loginUser" value="Login">
			
			<?php 
				if (isset($error_message)) {
					echo '<footer style="color:red;"><strong>'.$error_message.'</strong></footer>';
				}
			?>
          </form>
          <!--/.vanilla-form --> 
        </div>
        <!--/.form-container --> 
      </div>
      <!-- /.thin --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <?php 
    include("footer.php");
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