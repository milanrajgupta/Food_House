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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Food Type</title>
 <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
<?php
if($_POST)
{
	//var_dump($_FILES);
//This is the directory where images will be saved
$target = "images/";
$target = $target . basename( $_FILES['image']['name']);

//This gets all the other information from the form

$food_name=$_POST['food_name'];
$pic=($_FILES['image']['name']);

//Writes the information to the database
$query=" insert into food_type set food_name= '$food_name', imge_name='$pic' ";
$ex_query= mysql_query($query) or die(mysql_error());


//Writes the Filename to the server
if(move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    //Tells you if its all ok
    echo "The file  has been uploaded, and your information has been added to the directory";
} else {
    //Gives and error if its not
    echo "Sorry, there was a problem uploading your file.";
}
}
?>
<section>
	<div class="container">
        	<div class="col-md-6" style="float:left;">
            	<h1>Admin</h1>
                <form method="post"  enctype="multipart/form-data">
                    <form role="form">
                        <div class="form-group">
                            <label for="text">Enter Food Name:</label>
                            <input type="text" class="form-control" name="food_name" placeholder="Enter FOOD NAME">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Food Image:</label>
                            <input type="file"  class="form-control" name="image" />
                        </div>
                        <button type="submit" class="btn btn-primary" name="upload">ADD FOOD
                        </button>
                    </form>
               </form>
            </div>


    	<div class="col-md-6">
        	<table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>S No.</th>
                <th>Food Name</th>
                <th>Image</th>
                <th colspan="2">Operations</th>
            </tr>
        </thead>
        <tbody>
        <?php
			$query=" select * from food_type where status='on' ORDER BY id DESC";
			$select_query=mysql_query($query) or die(mysql_error());
			while($row = mysql_fetch_array($select_query))
			{
				?>  
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td> <?php echo $row['food_name']; ?></td>
                    <td><img src="images/<?php echo $row['imge_name'];?>" style="width:100px; height:100;"   /></td>
                    <td><a href="update.php?update_id=<?php echo $row['id']; ?>" class="btn btn-warning">Update</a></td>
                    <td> 
                    <a href="food_type_delete.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">DELETE</a>
                    </td>
                </tr>
                <?php
			}
			?>
        </tbody>
    </table>
        </div>
    </div>
</section>
    
</table>

</body>
</html>