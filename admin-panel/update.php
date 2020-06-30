<?php
include("connection.php");
echo $r= $_GET['update_id'];
$query=" select * from food_type where id='$r',food_name='$food_name'";

?>