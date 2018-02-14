<?php 

$_FILES["Filepath"] = $_GET["BrowseSImageI"];
			
		//$con = mysql_connect("localhost","root","");
					
					/*if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}*/
										
					$path1 = "data1/" . $_FILES["Filepath"]["name"];
					move_uploaded_file($_FILES["Filepath"]["tmp_name"],$path1);
					
					/*mysql_select_db("inkage",$con);					      				
					
					$sql ="
					INSERT INTO `inkage`.`post` (
					`PostTitle`, 
					`Post`,
					`Description`,
					`Image1`,
					`Author`,
					`Audiences`,
					`Category`,
					`Privacy`,
					`Email`,
					`UserID`) 
					
					VALUES ('".$_POST["PostTitle"]."', '".$_POST["Post"]."', '".$_POST["Post"]."', '".$path1."', '".$_SESSION["FirstName"]." ".$_SESSION["LastName"]."','".$_POST["Audiences"]."', '".$_POST["Category"]."', '".$_POST["Privacy"]."', '".$_SESSION["UserName"]."' , '".$_SESSION["UserID"]."' );";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					*/
					

?>
