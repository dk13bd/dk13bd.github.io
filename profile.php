<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("php/session.php");
	require_once("php/profile-update.php");
	require_once("header.php");
  ?>
  
  <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/parallax1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>My Profile</h2>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title">Welcome <?php echo $_SESSION['FirstName']; ?>! </h3>
        <div class="divide30"></div>
        <div class="form-container">
          <form name="update_password" method="post">
			<div class="row">
			  <div class="col-sm-4">
				<div class="form-field">
				  <label>
					<p> Account Access: <?php echo $_SESSION['Access']; ?> </p>
				  </label>
				</div>
				<!--/.form-field --> 
			  </div>
			  <!--/column -->
			</div>
			<div class="row">
			  <div class="col-sm-4">
				<div class="form-field">
				  <label>
					<p> Expire Date:
					<?php 
					if (isset($_SESSION['Expire'])) {
						echo $_SESSION['Expire'];
					} 
					else {
						echo "Never";
					}
					?> </p>
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
					<input type="password" name="new_password" placeholder="New Password" required="required" maxlength="30">
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
				  	<input type="password" name="confirm_password" placeholder="Confirm Password" required="required" maxlength="30"> 
				  </label>
				</div>
				<!--/.form-field --> 
			  </div>
			  <!--/column -->
			  <input type="submit" class="btn" name="SavePassword" value="Update Password">
			  
				<?php 
					if (isset($password_error)) {
						echo '<footer style="color:red;"><strong>'.$password_error.'</strong></footer>';
					}
					elseif (isset($password_success)) {
						echo '<footer style="color:green;"><strong>'.$password_success.'</strong></footer>';
					}
				?>

			</div>

          </form>
          <!--/.vanilla-form --> 
		  </br>
		  
		  <form name="update_email" method="post">
			<div class="row">
			  <div class="col-sm-4" >
				<div class="form-field">
				  <label>
					<input type="text" name="newemail" placeholder="New Email" required="required" maxlength="55">
				  </label>
				</div>
				<!--/.form-field --> 
			  </div>
			  <!--/column -->
			  <input type="submit" class="btn" name="SaveEmail" value="Update Email">
			  
				<?php 
					if (isset($email_error)) {
						echo '<footer style="color:red;"><strong>'.$email_error.'</strong></footer>';
					}
					elseif (isset($email_success)) {
						echo '<footer style="color:green;"><strong>'.$email_success.'</strong></footer>';
					}
				?>

			</div>
          </form>
		  </br>
		  		<input type="btn" class="btn" value="Logout" onclick="location.href='logout.php';">
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