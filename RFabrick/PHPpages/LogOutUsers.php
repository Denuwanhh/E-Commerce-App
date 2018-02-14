<?php
								
					session_start();
								
					//Insert in to Systemlog Table
					
					$con1 = mysql_connect("localhost","root","");
					
					if(!$con1)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con1);
      				
					$sql1 ="
					INSERT INTO `rfabricsdatabase`.`systemlog` (
					`SystemLogID` ,
					`Date` ,
					`Description`
					)
					VALUES (
					NULL ,
					CURRENT_TIMESTAMP , 'Logout User Account'
					);
					";			
					
					mysql_select_db($rfabricsdatabase, $con1);
          			$Result2 = mysql_query($sql1, $con1) or die(mysql_error());
          			$last_SystemLogId  = mysql_insert_id();
					
					mysql_close($sql1, $con1);	//Close the connection	
					
				//End of inserting to Systemlog Table
				
				//Insert in to Activity Table
					
					$con2 = mysql_connect("localhost","root","");
					
					if(!$con2)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con2);
      				
					$sql2 ="
					INSERT INTO `rfabricsdatabase`.`activity` (
					`UserID` ,
					`SystemLogID`
					)
					VALUES (
					'".$_SESSION["UserID"]."', '$last_SystemLogId'
					);
					";
															  				
					mysql_query($sql2, $con2); //Execute the query
					mysql_close($sql2, $con2);	//Close the connection	
					
				//End of inserting to Activity Table
								
								$_SESSION["UserName"] = "";
								$_SESSION["UserID"] = "";
								$_SESSION["PrivacyBit"] = "";
								$_SESSION["CartID"] = "";
								$_SESSION["Total"] = "";

?>