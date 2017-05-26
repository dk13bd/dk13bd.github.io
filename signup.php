<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("php/dbcontroller.php");
	require_once("php/sign-up.php");
	require_once("header.php");
  ?>
  
    <div class="post-parallax parallax inverse-wrapper parallax1" style="background-image: url(style/images/art/parallax1.jpg);">
    <div class="container inner text-center">
      <div class="headline text-center">
        <h2>Sign Up</h2>
        <p class="lead">Sign up to get access to our new and premium content!</p>
      </div>
      <!-- /.headline --> 
    </div>
    <!--/.container --> 
  </div>
  <!--/.parallax --> 
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title">Register</h3>
        <div class="divide30"></div>
        <div class="form-container">
          <form name="signing-up" method="post">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
                    <input type="text" name="FirstName" placeholder="First Name" required="required" maxlength="30">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
				    <input type="text" name="LastName" placeholder="Last Name" required="required" maxlength="30">

                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
              <div class="col-sm-6">
                <div class="form-field">
                  <label>
				    <input type="text" name="username" placeholder="Username" required="required" maxlength="30">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
			  
			  <div class="col-sm-6">
                <div class="form-field">
                  <label>
				    <input type="password" name="password" placeholder="Password" required="required" maxlength="30">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
			  <div class="col-sm-6">
                <div class="form-field">
                  <label>
					<input type="email" name="Email" placeholder="E-mail" required="required" maxlength="55">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
			  <div class="col-sm-6">
                <div class="form-field">
                  <label>
				    <input type="password" name="confirm_password" placeholder="Confirm Password" required="required" maxlength="30">
                  </label>
                </div>
                <!--/.form-field --> 
              </div>
              <!--/column -->
			  
<!--          <div class="col-sm-6">
                <div class="form-field">
                  <label class="custom-select">
                    <select name="department" required="required">
                      <option value="">Select Department</option>
                      <option value="Sales">Sales</option>
                      <option value="Marketing">Marketing</option>
                      <option value="Support">Customer Support</option>
                      <option value="Other">Other</option>
                    </select>
                    <span></span> </label>
                </div>
              </div> -->
			  
            </div>
            <!--/.row -->

			<label>
				<input type="checkbox" name="terms" value="true" required="required">
			    <span><!-- fake checkbox --></span>
				<span class="wrapped-label">I agree to the terms and conditions.</span>
			</label>
			<div class="divide20"></div>
			
            <input type="submit" class="btn" name="SubmitUser" value="Submit">
				<?php 
					if ($message == 1) {
						echo '<footer style="color:green;"><strong>You have registered successfully!</strong></footer>';
					}
					elseif ($message == 2) {
						echo '<footer style="color:red;"><strong>Passwords should be same.</strong></footer>';
					}
					elseif ($message == 3) {
						echo '<footer style="color:red;"><strong>Invalid email address.</strong></footer>';
					}
					elseif ($message == 4) {
						echo '<footer style="color:red;"><strong>Username is taken already, please choose another username.</strong></footer>';
					}
					elseif ($message == 5) {
						echo '<footer style="color:red;"><strong>Please accept the terms and conditions to register.</strong></footer>';
					}
					elseif ($message == 6) {
						echo '<footer style="color:red;"><strong>The server is experiencing some issues, please try again later!</strong></footer>';
					}
					elseif ($message == 7) {
						echo '<footer style="color:red;"><strong>All fields are required.</strong></footer>';
					}
					elseif ($message == 8) {
						echo '<footer style="color:red;"><strong>Password must be atleast 6 characters.</strong></footer>';
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