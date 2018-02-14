<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Stock</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

<script type="text/javascript">
function validateSearch()
{
	if(validateSearchField())
	{
		window.location.href = "Search.html";
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateSearchField()
{
	var search = document.getElementById("SearchFiledID").value;
	if((search==null)||(search=="")||(search==" ")){
		alert("Enter text to search")
		return false;
	}
	else
		return true;
}
function validate()
{
	if(validateFabricName() && validateContent() && validateTheam() && validateQuantity() && validateColour() && validateDescription() && validateSupplierDescription() && validateCategory() && validatePrice())
	{
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateFabricName()
{
	var Fabricname = document.getElementById("FabricNameFieldID").value;
	if((Fabricname==null)||(Fabricname=="")||(Fabricname==" ")){
		alert("Enter fabric name")
		return false;
	}
	else
		return true;
}
function validateContent()
{
	var Content = document.getElementById("ContentFieldID").value;
	if((Content==null)||(Content=="")||(Content==" ")){
		alert("Enter content")
		return false;
	}
	else
		return true;
}
function validateTheam()
{
	var Theam = document.getElementById("TheamFieldID").value;
	if((Theam==null)||(Theam=="")||(Theam==" ")){
		alert("Enter theam")
		return false;
	}
	else
		return true;
}
function validateQuantity()
{
	var Quantity = document.getElementById("PriceFieldID").value;
	if((Quantity==null)||(Quantity=="")||(Quantity==" "))
	{
		alert("Enter price")
		return false;
	}
	else if(isNaN(price))
	{
		alert("Enter price")
		return false;
	}
	else
		return true;
}
function validateColour()
{
	var Colour = document.getElementById("ColourFieldID").value;
	if((Colour==null)||(Colour=="")||(Colour==" ")){
		alert("Enter colour")
		return false;
	}
	else
		return true;
}
function validateDescription()
{
	var Description = document.getElementById("FabricDescriptionFieldID").value;
	if((Description==null)||(Description=="")||(Description==" ")){
		alert("Enter fabric description")
		return false;
	}
	else
		return true;
}
function validateSupplierDescription()
{
	var SupplierDescription = document.getElementById("SupplierDescriptionFieldID").value;
	if((SupplierDescription==null)||(SupplierDescription=="")||(SupplierDescription==" ")){
		alert("Enter supplier description")
		return false;
	}
	else
		return true;
}
function validateCategory()
{
	var Category = document.getElementById("CategoryFieldID").value;
	if((Category==null)||(Category=="")||(Category==" ")){
		alert("Enter category")
		return false;
	}
	else
		return true;
}
function validatePrice()
{
	var price = document.getElementById("PriceFieldID").value;
	if((price==null)||(price=="")||(price==" "))
	{
		alert("Enter price")
		return false;
	}
	else if(isNaN(price))
	{
		alert("Enter price")
		return false;
	}
	else
		return true;

}
</script>

</head>

<body>
<table class="TopBarClass" width="100%" bgcolor="#FFFFFF" border="0" align="center">
  <tr>
    <td height="25" width="0%"></td>
    <td height="25" width="720"></td>
    <td height="25" width="70"><font face="Segoe UI" size="2"><center><i>My eStore</i></center></font></td>
    <td height="25" width="160"><font face="Segoe UI" size="2"><center><i>Hi! <a href="Login.php">Sign in</a> or <a href="Register.php">Register</a></i>
    </center></font></td>
    <td height="25" width="20"><center>
      <a href="Cart.html"><img src="Images/Cart.png" width="20" height="20" /></a>
    </center></td>
    <td height="25" width="%"></td>
  </tr>
</table>
<table id="Search" width="1000" border="0" align="center">
  <tr>
    <td width="191" rowspan="3"><a href="Home.php"><img src="Images/Logo.png" width="180" height="70" /></a></td>
    <td width="573">&nbsp;</td>
    <td width="126">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" bgcolor="#FFFFFF"><input name="Search" type="text" placeholder="Search..." class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
    <i><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.html">Advanced</a></i></font></i>
    </center></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table class="MenuBar"  height="40" width="1000" border="0" align="center">
  <tr>
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.php">Home</a> | <a href="About_Us.php">About Us</a> | <a href="Contact_Us.php">Contact Us</a> | <a href="Help.html">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Add Stock</i></font></td>
  </tr>
</table><table width="1000px" bgcolor="#ffffff" border="0" align="center">
<form method="post" name="form" id="form" action="Add_Stock.php" enctype="multipart/form-data" >
  <tr>
    <td height="30" colspan="3" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td width="232" height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Fabric Name</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" name="FabricNameFieldID" id="FabricNameFieldID" class="resizedTextbox5"/></td>
    <td width="223" height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Content</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" name="ContentFieldID" id="ContentFieldID" class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Theam</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" name="TheamFieldID" id="TheamFieldID" class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Quantity</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" name="QuantityFieldID" id="QuantityFieldID" class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Colour</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" id="ColourFieldID" name="ColourFieldID" class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="60" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Fabric Description</div></font></td>
    <td height="60" bgcolor="#F2F2F2"><textarea class="resizedTextbox7" name="FabricDescriptionFieldID" id="FabricDescriptionFieldID"></textarea></td>
    <td height="60" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
 
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Category</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" id="CategoryFieldID" class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Price</div></font></td>
    <td height="30" bgcolor="#F2F2F2"><input type="text" name="PriceFieldID" id="PriceFieldID"  class="resizedTextbox5"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="3" bgcolor="#FFFFFF"></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="right">Image</div></font></td>
    <td height="40" bgcolor="#F2F2F2"><input type="file" name="BrowseOBannerI" id="BrowseOBannerI" value="Browse" /></td>
    <td height="40" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="40" bgcolor="#FFFFFF"><input type="submit" onclick="validate()" class="but" name="Add Fabric" id="Add Fabric" value="Add Fabric" style="border-style:hidden;height:100%;width:150px;background:#5882fa;color:#FFF"/></td>
    <td height="30" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
    <td height="5" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  </form>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td></td>
  </tr>
</table>
<table bgcolor="#F2F2F2" width="100%" border="0" align="center">
  <tr>
    <td width="%" height="32px"></td>
    <td width="32" height="32px"><img src="Images/FB.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/YT.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/Tw.jpg" width="32" height="32" /></td>
    <td width="32" height="32px"><img src="Images/G+.jpg" width="32" height="32" /></td>
    <td width="852" height="32px"></td>
    <td width="%" height="32px"></td>
  </tr>
</table>
<table bgcolor="#F2F2F2" height="20px" width="100%" border="0" align="center">
  <tr>
    <td height="20px" width="%"></td>
    <td height="20px" width="499"><p><font face="Segoe UI">Copyright © 2015 RFabrics.com; All Rights Reserved. <a href="User_Agreement.php">User Agreement</a>, <a href="Privacy.php">Privacy and Cookies</a></font></p></td>
    <td height="20px" width="499">&nbsp;</td>
    <td height="20px" width="%"></td>
  </tr>
</table>
</body>
</html>
<?php

session_start();

$userID = $_SESSION["UserID"];

if(isset($_POST["FabricNameFieldID"]))
{
	$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					$path1 = "FabricsImages/" . $_FILES["BrowseOBannerI"]["name"];
					move_uploaded_file($_FILES["BrowseOBannerI"]["tmp_name"],$path1);
					
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					INSERT INTO `rfabricsdatabase`.`fabrics` (`FabricID`, `SupplierID`, `Name`, `Price`, `Content`, `colour`, `Quty`, `Theme`, `Image`, `Description`, `Status`) 
					VALUES (NULL, '$userID', '".$_POST["FabricNameFieldID"]."', '".$_POST["PriceFieldID"]."', '".$_POST["ContentFieldID"]."', '".$_POST["ColourFieldID"]."', '".$_POST["QuantityFieldID"]."', '".$_POST["TheamFieldID"]."', '".$path1."', '".$_POST["FabricDescriptionFieldID"]."', 'No');";
					
								
					
						
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection

										
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
					CURRENT_TIMESTAMP , 'Add New Stock By Supplier'
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
					'$userID', '$last_SystemLogId'
					);
					";
															  				
					mysql_query($sql2, $con2); //Execute the query
					mysql_close($sql2, $con2);	//Close the connection	
					
				//End of inserting to Activity Table		
				
				header("Location: Action_Details_Add_Stock.html");					

}
?>