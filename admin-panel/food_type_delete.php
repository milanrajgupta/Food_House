<?php
	include("connection.php");
	if($_GET['delete_id'])
	{
		$id=$_GET['delete_id'];
		$query=mysql_query($con,"DELETE FROM food_type WHERE id = '$id'");
			header("location:food_type.php");
			echo "<script>alert('Are you sure DATA DELETED ?')</script>";
	}else
	{
		echo "Sorry delete query not work!";
	}
?>