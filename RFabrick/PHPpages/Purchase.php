<?php

	session_start();
	$ID = $_GET['ID'];	
				
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
						die('could not connect: ' . mysql_error());	
						}
												
						mysql_select_db("rfabricsdatabase",$con);					      				
					
						$sql ="UPDATE `rfabricsdatabase`.`cart` SET `Status` = '1' WHERE `cart`.`CartID` = '$ID' ;";				
								
						mysql_query($sql, $con); //Execute the query
	 					mysql_close($con);	//Close the connection
					
						$_SESSION["CartID"] = "";
						$_SESSION["Total"] = "";
					
?>