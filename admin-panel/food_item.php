
<?php 
	include("connection.php");
	session_start();
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
<?php
	if($_POST) 
	{
		  $food_id = $_POST['food_id'];
		  $food_name = $_POST['food_name'];
		  $price = $_POST['price'];
		  //$image = $_POST['image']; 
		  
		  $sql="INSERT INTO food_item (food_id,food_name,price) VALUES ('$food_id','$food_name','$price')";
		  $result = mysql_query($sql,$con);
		  if($result){
		
					echo ("Food Item is successfully inserted!");
			  }
			  else
			  {
					echo ("Sorry an error occured!");
			  }
	}
	?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food_Item</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
    	<div class="container">
        	<div class="col-lg-6">
            	<form method="post">
                	<form role="form">
                    <div class="form-group">
                        <label for="text">Select Food Type</label>
                        <select class="form-control" id="food_id" name="food_id">
                        	 <option class="form-control">Choose Food Type</option>
                        	<?php
								$sql1="SELECT * FROM food_type where status='on'";
								$select_query=mysql_query($sql1) or die(mysql_error());
								while($row = mysql_fetch_array($select_query))
							{
								?>  
                        		<option value="<?php echo $row['id']; ?>"><?php echo $row['food_name']; ?></option>
                             <?php
							}
							?>
                                                        
                        </select>
                    </div>
                     <div class="form-group">
                     	<a href="update.php" class="btn btn-warning">UPDATE</a>
                        <a href="delete.php" class="btn btn-danger">DELETE</a><br/>
                        <label for="text">Food Name:</label>
                        <input type="text" class="form-control" name="food_name" id="food_name" placeholder="Enter Food Name">
                    </div>
                     <div class="form-group">
                        <label for="text">Price:</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="Enter Food Price">
                    </div>
                    <button type="submit" class="btn btn-primary">ADD
                    </button>
                </form>
              </form>
            </div>
        </div>
    </div>
</body>
</html>