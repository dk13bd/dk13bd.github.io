<!DOCTYPE html>
<html lang="en">

  <?php 
	require_once("header.php");
  ?>
  
  <div class="tp-fullscreen-container revolution">
    <div class="tp-fullscreen">
      <ul>
        <li data-transition="fade"> <img src="style/images/art/slider-bg1.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
          <h1 class="tp-caption large sfr" data-x="30" data-y="263" data-speed="900" data-start="800" data-easing="Sine.easeOut">hello! this is lydia</h1>
          <div class="tp-caption medium sfr" data-x="30" data-y="348" data-speed="900" data-start="1500" data-easing="Sine.easeOut">most completed photography & <br />
            magazine template with various options</div>
        </li>
        <li data-transition="fade"> <img src="style/images/art/slider-bg2.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfl" data-x="center" data-y="283" data-speed="900" data-start="800" data-easing="Sine.easeOut">built for creatives to showcase</div>
          <div class="tp-caption large text-center sfr" data-x="center" data-y="363" data-speed="900" data-start="1500" data-easing="Sine.easeOut">their portfolio beautifully</div>
        </li>
        <li data-transition="fade"> <img src="style/images/art/slider-bg3.jpg"  alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-easing="Sine.easeOut">free updates & premium support</div>
          <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-easing="Sine.easeOut">you will have access to all updates and free support</div>
        </li>
        <li data-transition="fade"> <img src="style/video/nyc.jpg" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />
          <div class="tp-caption large text-center sfb" data-x="center" data-y="293" data-speed="900" data-start="800" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">html5 self hosted video support</div>
          <div class="tp-caption medium text-center sfb" data-x="center" data-y="387" data-speed="900" data-start="1500" data-endspeed="100" data-easing="Sine.easeOut" style="z-index: 2;">for better visualization of your company</div>
          <div class="tp-caption tp-fade fadeout fullscreenvideo"
			data-x="0"
			data-y="0"
			data-speed="1000"
			data-start="1100"
			data-easing="Power4.easeOut"
			data-elementdelay="0.01"
			data-endelementdelay="0.1"
			data-endspeed="1500"
			data-endeasing="Power4.easeIn"
			data-autoplay="true"
			data-autoplayonlyfirsttime="false"
			data-nextslideatend="true"
				data-dottedoverlay="twoxtwo"
				data-volume="mute" data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on" style="z-index: 1;">
            <video class="" preload="none" width="100%" height="100%" 
poster='style/video/nyc.jpg'>
              <source src='style/video/nyc.mp4' type='video/mp4' />
              <source src='style/video/nyc.webm' type='video/webm' />
            </video>
          </div>
        </li>
      </ul>
      <div class="tp-bannertimer tp-bottom"></div>
    </div>
    <!-- /.tp-fullscreen-container --> 
  </div>
  <!-- /.revolution -->
  
  <div class="light-wrapper">
    <div class="container inner">
       <div class="thin">
        <h3 class="section-title text-center">Galleries</h3> 
        <p class="text-center">blah blah blah</p>
      </div> 
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="row">
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="models.php"><img src="style/images/art/s1.jpg" alt="" /> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Model Gallery</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column -->
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="images.php"><img src="style/images/art/s2.jpg" alt="" /> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Image Gallery</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column -->
        <div class="col-sm-4">
          <div class="caption-overlay">
            <figure><a href="videos.php"><img src="style/images/art/s3.jpg" alt="" /> </a></figure>
            <div class="caption bottom-right">
              <div class="title">
                <h3 class="main-title layer">Video Gallery</h3>
              </div>
              <!--/.title --> 
            </div>
            <!--/.caption --> 
          </div>
        </div>
        <!-- /column --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <div class="dark-wrapper">
    <div class="container inner">
      <div class="thin">
        <h3 class="section-title text-center">Sample Work</h3>
        <p class="text-center">blah blah blah</p>
      </div>
      <!-- /.thin -->
      <div class="divide10"></div>
      <div class="cbp-panel">
        <div id="js-filters-mosaic" class="cbp-filter-container text-center">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All </div>
          <div data-filter=".newest" class="cbp-filter-item"> Newest </div>
          <div data-filter=".trending" class="cbp-filter-item"> Trending </div>
          <div data-filter=".popular" class="cbp-filter-item"> Popular </div>
        </div>
        <div id="js-grid-mosaic" class="cbp">
          <div class="cbp-item print motion"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="https://vimeo.com/24243147" data-title-id="title-1">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p1.jpg" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-1" class="hidden">
              <h3>Ipsum Tortor Dapibus</h3>
              <p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          
          <div class="cbp-item trending"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p2-full.jpg" data-title-id="title-2">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p2.jpg" alt="" /> </div>
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
          
          <div class="cbp-item newest popular"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p3-full.jpg" data-title-id="title-3">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p3.jpg" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-3" class="hidden">
              <h3>Ullamcorper Sem Bibendum</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          
          <div class="cbp-item web"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p4-full.jpg" data-title-id="title-4">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p4.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print logo"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p5-full.jpg" data-title-id="title-5">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p5.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print web"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p6-full.jpg" data-title-id="title-6">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p6.jpg" alt="" /> </div>
            <div class="cbp-caption-activeWrap">
              <div class="cbp-l-caption-alignCenter">
                <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title"><span class="cbp-plus"></span></div>
                </div>
              </div>
            </div>
            <!--/.cbp-caption-activeWrap --> 
            </a>
            <div id="title-6" class="hidden">
              <h3>Ullamcorper Sem Bibendum</h3>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
            </div>
            <!-- /.hidden --> 
          </div>
          <!--/.cbp-item -->
          
          <div class="cbp-item motion logo"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="https://vimeo.com/6757600" data-title-id="title-7">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p7.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print logo"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p8-full.jpg" data-title-id="title-8">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p8.jpg" alt="" /> </div>
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
          
          <div class="cbp-item logo web"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p9-full.jpg" data-title-id="title-9">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p9.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print web"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p10-full.jpg" data-title-id="title-10">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p10.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p11-full.jpg" data-title-id="title-11">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p11.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print logo"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p12-full.jpg" data-title-id="title-12">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p12.jpg" alt="" /> </div>
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
          
          <div class="cbp-item print logo"> <a class="cbp-caption fancybox-media" data-rel="portfolio" href="style/images/art/p13-full.jpg" data-title-id="title-13">
            <div class="cbp-caption-defaultWrap"> <img src="style/images/art/p13.jpg" alt="" /> </div>
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
          
        </div>
        <!--/.cbp --> 
        
      </div>
      <!--/.cbp-panel -->
      <div class="divide30"></div>
      <div id="js-grid-mosaic-more" class="cbp-l-loadMore-text"> <a href="ajax/loadmore2.html" class="cbp-l-loadMorelink btn" rel="nofollow"> <span class="cbp-l-loadMore-defaultText">Load More</span> <span class="cbp-l-loadMore-loadingText">Loading...</span> <span class="cbp-l-loadMore-noMoreLoading">No More Works</span> </a> </div>
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.dark-wrapper -->
  
  <div class="light-wrapper">
    <div class="container inner">
      <div class="row">
        <div class="col-sm-4 col-md-3">
          <h2>Instagram Feed</h2>
          <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Duis mollis, est non commodo luctus, nisi erat. Nullam quis risus eget urna mollis ornare vel eu leo. Duis mollis, est non commodo.</p>
          <div class="divide10"></div>
          <a href="https://instagram.com/urbanshots/" class="btn btn-icon"><i class="icon-s-instagram"></i> Instagram Page</a> </div>
        <!--/column -->
        <div class="col-sm-8 col-md-9">
          <div class="image-grid col5">
            <div class="items-wrapper">
              <div id="instafeed" class="isotope items" data-limit="5"></div>
              
              <!--/.isotope --> 
            </div>
            <!--/.items-wrapper --> 
          </div>
          <!--/.image-grid --> 
        </div>
        <!--/column --> 
      </div>
      <!--/.row --> 
    </div>
    <!--/.container --> 
  </div>
  <!-- /.light-wrapper -->
  
  <?php 
    require_once("footer.php");
  ?>