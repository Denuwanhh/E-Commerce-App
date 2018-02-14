<?php
										
	$fabriID = $_GET["fabriID"];
	
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `fabrics` WHERE `FabricID` = '$fabriID ' "); 
					
					$row = mysql_fetch_array($result);			  
					
					mysql_close($con);
			
				echo "".$row["Price"].",".$row["colour"].",".$row["Theme"].",".$row["Content"].",".$row["Quty"].",".$row["Image"]."" ;				
?>