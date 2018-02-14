<?php

$BrandName = $_GET["BrandName"];
$Description =$_GET["Description"];
$FirstName = $_GET["FirstName"];
$LastName = $_GET["LastName"];
$Address = $_GET["Address"];
$Telephone = $_GET["Telephone"];
$email = $_GET["email"];
$Password = md5($_GET["Password"]);

				//Insert in to userAccounts Table
					
					$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
      				
					//Insert Data in to User table
					$sql ="
					INSERT INTO `rfabricsdatabase`.`useraccounts` 
					(`UserID`, `UserName`, `Password`, `Email`, `PrivacyBit`) 
					VALUES (NULL, '$email', '$Password', '$email', '2');
					";
					
					mysql_select_db($rfabricsdatabase, $con);
          			$Result1 = mysql_query($sql, $con) or die(mysql_error());
          			$last_UserId  = mysql_insert_id(); 	
																												  				
					mysql_close($sql, $con);	//Close the connection	
					
				//End of inserting to userAccounts Table
				
				//Insert in to supplier Table
					
					$con3 = mysql_connect("localhost","root","");
					
					if(!$con3)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con3);
      				
					//Insert Data in to User table
					$sql3 ="
					INSERT INTO `rfabricsdatabase`.`suppliers` (`UserID`, `FirstName`, `LastName`, `BrandName`, `Telephone`, `Address`, `Description`, `Ratings`) VALUES ('$last_UserId', '$FirstName', '$LastName', '$BrandName', '$Telephone', '$Address', '$Description', '0');
					";
					
					mysql_query($sql3, $con3); //Execute the query
					mysql_close($sql3, $con3);	//Close the connection	
					
				//End of inserting to supplier Table
										
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
					CURRENT_TIMESTAMP , 'Add New User Account as a Supplier'
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
					'$last_UserId', '$last_SystemLogId'
					);
					";
															  				
					mysql_query($sql2, $con2); //Execute the query
					mysql_close($sql2, $con2);	//Close the connection	
					
				//End of inserting to Activity Table							


?>