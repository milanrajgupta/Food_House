<!DOCTYPE HTML>
<html>
<head>
<title>Food House</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<!--web-fonts-->
  <link href='http://fonts.googleapis.com/css?family=Niconne|Playball|Open+Sans:300italic,400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
</head>
<body>
	<!--start header area-->
    	<?php include("include-file/top-header.php");?>
    <!--end header area-->
	<!--start-header-->
   		 <?php include("include-file/logo.php");?>
    <!--end-header-->

	<!--start-menu-->
    <div id="home" class="header">
        <div class="header-top">
        
            <div class="container">
            <!--top-nav-->
                <div class="top-nav">
                
                	<span class="menu"> </span>
                    <ul>
                        <li><a class="active" href="index.php">Home</a></li> 
                        <li><a href="about.php">About</a></li>
                        <li><a href="menu.php">MENU</a></li> 
                        <li><a href="404.php">SERVICES</a></li> 
                        <li><a href="portfolio.php">PORTFOLIO</a></li> 
                        <li class="lost"><a href="contact.php">Contact</a></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <!-- script-for-menu -->
                <script>
                $(document).ready(function(){
                $("span.menu").click(function(){
                $(".top-nav ul").slideToggle(200);
                });
                });
                </script>
            </div>
            
        	<div class="clearfix"> </div>
        </div>
    </div>
    <!--end-menu-->
    
<!--start-slider-->
	<div class="slider-bg">
				<div class="side wow bounceInRight" data-wow-delay="0.7s">
					 <div  id="top" class="callbacks_container">
							<ul class="rslides" id="slider4">
                            		<li>
										<img src="image/home-1.jpg"  class="img-responsive" alt="" />
										<div class="caption1">
										<div class="logo">
											<a href="index.php"><h1>FOOD<span>House</span></h1></a>
										</div>
											<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>	
											<p>We offer the best Services in our Restaurant.<p>
										</div>
									</li>
									<li>
										<img src="image/home-2.jpg"class="img-responsive" alt="" />
										<div class="caption1">
										<div class="logo">
											<a href="index.php"><h1>FOOD<span>House</span></h1></a>
										</div>
											<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>	
											<p>We offer the best Services in our Restaurant.<p>
										</div>
									</li>
									<li>
									<img src="image/home-3.jpg" class="img-responsive" alt="" />
									  <div class="caption1">
										<div class="logo">
											<a href="index.php"><h1>FOOD<span>House</span></h1></a>
										</div>
										<h2>BEST RECIPES WITH
											BEST INGREDIENTS</h2>	
											<p>We offer the best Services in our Restaurant.<p>
										</div>
									</li>
								 </ul>
							</div>
						</div>
					</div>	
				<!--- banner Slider starts Here --->
	  			<script src="js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
				<div class="clearfix"> </div>
</div>
<!---728x90--->
		<!--start-welcome-->
		<div class="welcome-section">
		   <div class="container">
				 <div class="wel-grid">
				   <div class="col-md-4 welcome-text">
					   <h3>Welcome</h3>
					   <h4>TO RESTAURANT!</h4>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					   <img src="images/img_03.jpg" class="img-responsive" alt="" />
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="about-grid">
				   <div class="col-md-4 about-img">
					   <img src="images/img_02.jpg" class="img-responsive" alt="" />
					</div>
					<div class="col-md-8 about-text">
					   <h3>About</h3>
					   <h4>OUR RESTAURANT!</h4>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				   </div>
				   <div class="clearfix"> </div>
			   </div>
		    </div>
		</div>
		<!---728x90--->
		<!--start-team-->
		   <div class="team-section"> 
		   <div class="container">
				<div class="team">
				    <div class="col-md-4 team-left">
					    <h3>OUR TEAM</h3>
					</div>
					 <div class="col-md-8 team-right">
						<ul class="ch-grid">
							<li>
								<div class="ch-item ch-img-1">
									<div class="ch-info">
										<h3>Founder</h3>
										<p>by Milan <a href="">View on Dribbble</a></p>
									</div>
								</div>
								<h4>MILAN</h4>
							 <p>Nulla facilisi. Aean nec eros.…</p>
							 <a class="more" href="">More Info </a>
							</li>
							<li>
								<div class="ch-item ch-img-2">
									<div class="ch-info">
										<h3>Founder</h3>
										<p>by Milan <a href="#">View on Dribbble</a></p>
									</div>
								</div>
								<h4>Navneet</h4>
									 <p>Nulla facilisi. Aenn nec eros.…</p>
									 <a class="more" href="#">More Info </a>
							</li>
							<!--<li>
								<div class="ch-item ch-img-3">
									<div class="ch-info">
										<h3>Founder</h3>
										<p>by Milan <a href="#">View on Dribbble</a></p>
									</div>
								</div>
								<h4>GUPTA</h4>
									 <p>Nulla facilisi. Aenn nec eros.…</p>
									 <a class="more" href="#">More Info </a>
							</li>-->
                        </ul>
						<div class="clearfix"> </div>
					 </div>
					 <div class="clearfix"> </div>
				</div>
			</div>
		   </div>
		<!---728x90--->
		<!--start-blog-->
		<div class="blog-section">
		   <div class="container">
		         <h3>Blog</h3>
				 <div class="blog">
				   <div class="col-md-4 blog-text">
					   <h5>THU 14 May, 2015</h5>
					   <a href="single.php"><h4>EXCEPTEUR SINT OCCAECAT CUPIDATAT NON</h4></a>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="single.php" class="mask"><img src="images/b2.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="blog">
				 <div class="col-md-4 blog-text two">
					   <h5>THU 14 May, 2015</h5>
					  <a href="single.php"><h4>LOREM IPSUM DOLOR SIT AMET CONSE</h4></a>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-8 blog-img two">
					 <a href="single.php" class="mask"><img src="images/b3.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div> 
			    <div class="blog">
				   <div class="col-md-4 blog-text">
					   <h5>THU 14 May, 2015</h5>
					   <a href="single.php"><h4>EXCEPTEUR SINT OCCAECAT CUPIDATAT NON</h4></a>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-8 welcome-img">
					 <a href="single.php" class="mask"><img src="images/b1.jpg" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
		</div>
	</div>
<!--gallery-->
	<div class="gallery">
		<div class="container">
				<h3>Gallery</h3>
			<div class="portfolio-bottom">
				<div class="gallery-one">
					<div class="col-md-3 gallery-left">
						<a href="images/g1.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g1.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g2.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g2.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g4.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g4.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="col-md-3 gallery-left">
						<a href="images/g3.jpg" class=" mask b-link-stripe b-animate-go   swipebox"  title="Image Title">
								<img src="images/g3.jpg" alt="" class="img-responsive zoom-img"/>
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--swipebox -->	
			<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
				</script>
			<!--//swipebox Ends -->
<!--/start-footer-->
	 <?php include("include-file/footer.php");?>
<!--/end footer-->
</body>

</html>