<?php
  	include("connection.php");
	session_start();
	$lmsg="";
	if($_POST) 
	{
		  $admin_id = $_POST['admin_id'];
		  $password = $_POST['password']; 
		  
		  //check if the username entered is in the database.
		  $sql = "SELECT * FROM admin_panel WHERE admin_id = '$admin_id'";
		  $result = mysql_query($sql) or die(mysql_error());
		  $count = mysql_num_rows($result);
		  //echo $count;
			
		  if($count == 1) 
		  {
			  $info=mysql_fetch_array($result);
			  if($info['password']==$password)
			  {
				 $_SESSION['rmg']= "$admin_id";
				 header("location:welcome.php"); 
			  }
			  else
			  {
				  $lmsg = "Wrong Password Please Try Again";  
			  }
		  }
		  else
		  {
			$lmsg= "Invalid UserName";  
		  }
	   }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom css for template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
 <body>
 	<section>
    	<div class="row">
            <div class=" col-lg-12">
                <div class="form">
                <div class="dp">
                	<img src="img/Milan1.jpg" height="100" width="100" style="border-radius:50%;">
                   <!-- <video src="img/High-Rated-Gabru.mp4 " controls height="100" width="100">-->
    					
   					</video>
                </div>
                    <h1>Admin</h1>
                    <form method="post" action="">
                        <form role="form">
                            <div class="form-group">
                                <label for="text">User Name:</label>
                                <input type="text" class="form-control" name="admin_id" id="admin_id" placeholder="Enter Username">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password:</label>
                                <input type="password" class="form-control" name="password" id="password"  placeholder="Password">
                            </div>
                            <p><?php echo $lmsg;?></p><br/>
                            <button type="submit" class="btn btn-primary">Login
                            </button>
                        </form>
                   </form>
                </div>
            </div>
        </div>
    </section>
 	  
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
        <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>