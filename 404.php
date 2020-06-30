<!DOCTYPE HTML>
<html>
<head>
<title>Food House | 404</title>
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
	<!--start-header-->
	<div id="home" class="header">
			<!--logo-->
			<div class="header-top">
				<div class="container">
		<!--top-nav-->
				<div class="top-nav">
					<span class="menu two"> </span>
					<ul>
						<li><a href="index.php">Home</a></li> 
						<li><a href="about.php">About</a></li>
						<li><a href="menu.php">MENU</a></li> 
						<li><a class="active" href="404.php">SERVICES</a></li> 
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
	<!--End-top-nav-script-->
				<div class="clearfix"> </div>
		</div>
		<div class="head-bg">
					<div class="logo three">
							<a href="index.php"><h1>FOOD<span>House</span></h1></a>
					</div>
		</div>
		<!--/header-->
	</div>
	<!---728x90--->
	<!--error-->
	<div class="error">
		<div class="container">
			<div class="error-top">
				<h3>404<span>ERROR!</span></h3>
				<p>Page Not Found...</p>
				<!---728x90--->
				<div class="error-btn">
					<a href="index.php">Back To Home</a>
				</div>
			</div>
		</div>
	</div>
	<!--error-->
	<!---728x90--->
<!--/start-footer-->
	 <?php include("include-file/footer.php");?>
<!--/end footer-->
</body>

</html>