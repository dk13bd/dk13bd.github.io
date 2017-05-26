  <footer class="footer inverse-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4">
          <div class="widget">
            <h3 class="widget-title">Popular Galleries</h3>
            <ul class="post-list">
              <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="style/images/art/a1.jpg" alt="" /> </a> </div>
                <div class="meta">
                  <h5><a href="blog-post.html">Popular Gallery 1</a></h5>
                  <em><span class="date">3th Oct 2012</span> </em> </div>
              </li>
              <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="style/images/art/a2.jpg" alt="" /> </a> </div>
                <div class="meta">
                  <h5><a href="blog-post.html">Popular Gallery 2</a></h5>
                  <em><span class="date">28th Sep 2012</span> </em> </div>
              </li>
              <li>
                <div class="icon-overlay"> <a href="blog-post.html"><img src="style/images/art/a3.jpg" alt="" /> </a> </div>
                <div class="meta">
                  <h5><a href="blog-post.html">Popular Gallery 3</a></h5>
                  <em><span class="date">15th Aug 2012</span> </em> </div>
              </li>
            </ul>
            <!-- /.post-list --> 
          </div>
          <!-- /.widget --> 
        </div>
        <!-- /column -->
        
         <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Tags</h4>
            <ul class="tag-list">
			  <li><a href="index.php" class="btn">Home Page</a></li>
              <li><a href="models.php" class="btn">Models</a></li>
              <li><a href="images.php" class="btn">Photography</a></li>
              <li><a href="videos.php" class="btn">HD Videos</a></li>
              <li><a href="pricing.php" class="btn">Membership</a></li>
              <li><a href="signup.php" class="btn">Join us!</a></li>
            </ul>
          </div>

          <div class="widget">
            <h4 class="widget-title">Social Media</h4>
            <ul class="social">
	    <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-reddit" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		<li><a href="#"><i class="fa fa-tumblr-square" aria-hidden="true"></i></a></li>
            </ul>
            <!-- .social --> 
            
          </div>
		  <div class="widget">
            <h4 class="widget-title">Contact us</h4>
            <div class="contact-info"> 
              <i class="icon-mail"></i> <a href="mailto:dk13photostudio@gmail.com">dk13photostudio@gmail.com</a> 
			</div>
          </div>
          <!-- /.widget --> 
        </div>
        <!-- /column -->
        
        <div class="col-sm-4">
          <div class="widget">
            <h4 class="widget-title">Search</h4>
            <form class="searchform" method="POST" action="search.php" id="searchform">
              <input type="text" name="svalue">
              <button type="submit" name="search" class="btn btn-default">Go</button>
            </form>
          </div>
          <!-- /.widget -->
		  <div class="widget">
            <h4 class="widget-title">Terms and Conditions</h4>
            <div class="contact-info"> 
              <p>DK-13 services may contain materials of an adult, sexually explicit nature. You agree and affirm that you are not offended by this content and wish to view such content. You agree and affirm that you are of legal age to purchase adult, sexually explicit materials in your jurisdiction. You agree not to upload, distribute, modify, display, post, sell or otherwise exploit or share the content and other intellectual property from DK-13.</p>
			</div>
          </div>
          <!-- /.widget --> 
          
        </div>
        <!-- /column --> 
        
      </div>
      <!-- /.row --> 
    </div>
    <!-- .container -->
    
    <div class="sub-footer">
      <div class="container inner">
        <p class="text-center">© 2017 DK-13. All rights reserved.</p>
      </div>
      <!-- .container --> 
    </div>
    <!-- .sub-footer --> 
  </footer>
  <!-- /footer --> 
<?php 
if (!isset($model_page)) {
	echo '</main>
		<!--/.body-wrapper --> 
		<script src="style/js/jquery.min.js"></script> 
		<script src="style/js/bootstrap.min.js"></script> 
		<script src="style/js/plugins.js"></script> 
		<script src="style/js/classie.js"></script> 
		<script src="style/js/jquery.themepunch.tools.min.js"></script> 
		<script src="style/js/scripts.js"></script>
		<script src="https://use.fontawesome.com/29956240d5.js"></script>
		</body>
		</html>';
}