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
						<li><a href="404.php">SERVICES</a></li> 
						<li><a href="portfolio.php">PORTFOLIO</a></li> 
						<li class="lost"><a class="active" href="contact.php">Contact</a></li>
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
	<!--/contact-->
	<div class="contact-section">
		<div class="contact-head">
			<div class="container">
				<h3>Contact Info</h3>
				<p>Donec vel ornare orci. Donec gravida, felis eu venenatis ultricies, neque libero auctor tortor, nec aliquet dolor massa quis est. Ut ut molestie turpis. Curabitur semper purus tortor, vel mollis nunc vestibulum gravida. Proin vehicula magna non dui aliquet rhoncus. In massa nisl; sollicitudin et nulla ac, feugiat auctor nisl. Nulla sed nisl nisi. Phasellus et arcu augue? Praesent sit amet vestibulum est. Maecenas ut ultrices, nunc sed auctor eleifend, tellus enim placerat velit, id porttitor ante est non nisl. Duis molestie lacus varius suscipit ullamcorper. Nullam at auctor ante. Praesent laoreet elit varius odio porta tincidunt. Morbi in nisl id eros volutpat ornare a et diam. Phasellus tempus non arcu at eleifend.</p>
			</div>
		</div>
		<!---728x90--->
		<iframe src=></iframe>
		<!---728x90--->
		<div class="contact-inner">
		  <div class="container">
			<h4>FeedBack</h4>
			<form class="con"> 
			    <input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
						 <input type="text" class="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}">
						<input type="text" class="text" value="Subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
						<textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="clearfix"> </div>
						<div class="sub-button">
							<input name="submit" type="submit" value="Send ">
						</div>
					</form>
			</div>
		</div>
	</div>
<!--/start-footer-->
	 <?php include("include-file/footer.php");?>
<!--/end footer-->
</body>

</html>