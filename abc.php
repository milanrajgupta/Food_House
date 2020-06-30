<?php
	include("admin-panel/connection.php"); //for Connection
?>
<?php
     $projects = array();
	 $projects2 = array();
     // fetch data from the database
	 $sql = "SELECT t.id , t.food_name , i.id , i.food_name , i.price FROM food_type t INNER JOIN food_item i";
     //$food_type = mysql_query('select * from food_type where status="on"') or die("Query fail: " . mysqli_error());
	 //$food_item = mysql_query('select * from food_item where food_id=1') or die("Query fail: " . mysqli_error());
	 
	 echo "<table width=100% border=1px>";
				$result = mysql_query($sql);
					while($row =  mysql_fetch_assoc($result))
           			 {
						 echo "<tr>";
						foreach ($row as $project){
							echo "<td>".$project."</td>";
						}
						echo "</tr>";
					 }
					 echo "</table>";
				?>
	
	