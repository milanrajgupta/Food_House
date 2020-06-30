<?php
   session_start(); //for sesstion
   if(isset($_SESSION['rmg']))
   {
	   $rmg=$_SESSION['rmg'];
   }
   else
   {
   	$rmg=null;
   }
	if(empty($rmg))
	{
		header('Location: login.php');
	}
?>
<html>
   <head>
      <title>Welcome page </title>
      <link href="css/bootstrap.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      
   </head>
   
   <body>
 	<?php include("include-file/top-header.php");?>
        <section class="middle">
            <div class="container-fluid">
            	<div class="container">
                	<div class="menu">
                    	<ul>
                        	<li><a href="../index.php">Home</a></li>
                            <li><a>Add<span class="caret"></span></a>
                            	<ul>
                                    <li><a href="food_type.php">Food Type</a></li>
                                    <li><a href="food_item.php">Food Item</a></li>
                      		    </ul>
                            </li>
                            <li><a>Delete</a></li>
                            <li><a>My Account<span class="caret"></span></a>
                            	<ul>
                                    <li><a>Home</a></li>
                                    <li><a>Update</a></li>
                                    <li><a>Delete</a></li>
                                    <li><a>New</a></li>
                                    <li><a>My Account</a></li>
                      		    </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            	<div class="container-fluid footer">
                	<div class="container">
                    	Milan
                    </div>
                </div>
        </section>
        <script src="js/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
   </body>
</html>