<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Action Details</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

</head>

<body>
<table width="420px" bgcolor="#FFFFFF" height="300px" class="tblea"  border="0" align="center">
  <tr>
    <td><table width="400" bgcolor="#FFFFFF" border="0" align="center">
    <form id="form1" name="form1" method="Get" action="Administrator_Dashboard.php">
  <tr>
    <td colspan="3"><div align="center"><img src="Images/Logo.png" width="180" height="70" /></div></td>
  </tr>
  <tr>
    <td colspan="3"><font color="#848484"  size="5" face="Segoe UI">Action Details</font></td>
    
  </tr>
    <tr>
    <td colspan="3" bgcolor="#fafafa" align="justify"><div><font color="#848484" size="3" face="Segoe UI">After you click 'Suspand' button, All the permited actions regarding user will be Suspand. 
      Actvities like purchasing ,suppling no longer permit.</font></div></td>
    
  </tr>
  <tr>
    <td width="230">&nbsp;</td>
    <td width="76" align="center" bgcolor="#FFFFFF"></td>
    <td width="80" align="center" bgcolor="#5882fa"><input type="submit" name="ClickNo" id="ClickNo" value="OK" style="background:#5882fa;border:none;color:#FFF" onclick="ClickNo()"/></td>
  </tr>
  </form>
</table></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php

$userID = $_GET["title"];

				//Update Supplier Table
					
					$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
      				
					$sql ="
					UPDATE `suppliers` SET `Ratings`= 1 WHERE UserID = '".$userID."';";
															  				
					mysql_query($sql, $con); //Execute the query
					mysql_close($con);	//Close the connection	
					
				//End of Update Supplier Table
				
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
					CURRENT_TIMESTAMP , 'Suspand Supplier Account by Administrator'
					);
					";			
					
					mysql_select_db($rfabricsdatabase, $con1);
          			$Result2 = mysql_query($sql1, $con1) or die(mysql_error());
          			$last_SystemLogId  = mysql_insert_id();
					
					mysql_close($con1);	//Close the connection	
					
				//End of inserting to Systemlog Table
				
				session_start();
				
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
					mysql_close($con2);	//Close the connection	
					
				//End of inserting to Activity Table							


?>
