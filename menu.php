<?php
	include("admin-panel/connection.php"); //for Connection
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Food House| Menu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food House Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link href="css/menu.html" rel='stylesheet' type='text/css' />		
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
						<li><a class="active" href="menu.php">MENU</a></li> 
						<li><a href="404.php">SERVICES</a></li> 
						<li><a href="portfolio.php">PORTFOLIO</a></li> 
						<li><a href="contact.php">Contact</a></li>
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
		<div class="menu-section">
		     <div class="container">
			      <h2>Menu</h2>
				  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen,Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
				       <div class="menu-grids">
                            
                            <?php
							$query=" select * from food_type where status='on'";
							$select_query=mysql_query($query) or die(mysql_error());
							while($row = mysql_fetch_array($select_query))
							{
								$i=$row['id'];
								?>  
                            <div class="col-md-4 menu-grid">
								<a href="single.php"> <img src="admin-panel/images/<?php echo $row['imge_name'];?>" class="img-responsive" alt="" /></a>
								<div class="price">
                                    <span><?php echo $row['food_name']; ?></span>
                                </div>
                                <table class="table table-bordered table-striped" style="text-align:center;">
                                    <thead style="text-align:center;">
                                        <tr>
                                            <th>Item Name</th>
                                            <th>Price(Rs.)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
									$query2=" select * from food_item where food_id='$i'";
									$select_query2=mysql_query($query2) or die(mysql_error());
									while($row2 = mysql_fetch_array($select_query2))
									{
										?>
                                        <tr>
                                            <td><?php echo $row2['food_name']; ?></td>
                                            <td><?php echo $row2['price'].'.00'; ?></td>
                                        </tr>
                                        
									<?php
                                    }                                                    
                                    ?>
                                    </tbody>
                                </table>
							</div>
                            <?php
							}
							?>
				 </div>
			 </div>
		</div>
		<!---728x90--->
	<!--/start-reservations-->
          	<div class= "reservation">
				<div class="container"> 
				     <div class="re-main">
					    <h3>Reservation</h3>
						 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960.</p>
						 <h4>+91 0000000000</h4>
					 </div>
				</div>
			</div>		 
	<!--/end-reservations-->	
	<!---728x90--->
<!--/start-footer-->
	 <?php include("include-file/footer.php");?>
<!--/end footer-->
</body>

</html>