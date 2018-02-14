<?php 			 
			 session_start();
			 		
					$valid = false;
					
					$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$userName = $_GET["userName"];
					
					$password_send = md5($_GET["password"]);

	 				$result = mysql_query("SELECT *
											FROM `useraccounts`
											WHERE `UserName` LIKE '".$userName."'
											AND `Password` = '".$password_send."' ;");
	
					$row = mysql_fetch_array($result);
					
					if($row > 0)
					{
						$valid = true;
					}					
						
					if($valid){							
							
							$_SESSION["UserName"] = $userName;
							$_SESSION["UserID"] = $row["UserID"];
							$_SESSION["PrivacyBit"] = $row["PrivacyBit"];				
					}
					else{
							
						}
							
							mysql_close($con);
							
?> 