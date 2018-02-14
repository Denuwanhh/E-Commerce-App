<?php
				
			session_start();			
			if(isset($_SESSION["PrivacyBit"]))
			{
			
				if($_SESSION["PrivacyBit"] != 2)
				{
					header("Location: Login.php");
				}
			}
		?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Buyer Statistics</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">
<head>  
  <script type="text/javascript">
window.onload = function () {
	
	var Jan = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-01-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Fab = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-02-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var March = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-03-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var April = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-04-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var May = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-05-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var June = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-06-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var July = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-07-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Aug = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-08-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Sep = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-09-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Oct = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-10-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Nov = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-11-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var Dec = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(s.SystemLogID) Total FROM systemlog s join activity a on a.SystemLogID = s.SystemLogID WHERE (s.Date LIKE '%-12-% %:%:%') and a.UserID = '".$_GET['title']."' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
					
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "",
		},
		exportEnabled: false,
		axisY: {
			includeZero:false,
			prefix: "$",
			title: "",
		},     
		axisX: {
			interval:1,
			intervalType: "month",
			valueFormatString: "MMM",
			title: "",
		},
		data: [
		{
			type: "rangeColumn",
			bevelEnabled: false,
			dataPoints: [   // Y: [Low, High]
				{x: new Date(2013,00,01), y:[0, Jan]},
				{x: new Date(2013,01,01), y:[0, Fab]},
				{x: new Date(2013,02,01), y:[0, March]},
				{x: new Date(2013,03,01), y:[0, April]},
				{x: new Date(2013,04,01), y:[0, May]},
				{x: new Date(2013,05,01), y:[0, June]},
				{x: new Date(2013,06,01), y:[0, July]},
				{x: new Date(2013,07,01), y:[0, Aug]},
				{x: new Date(2013,08,01), y:[0, Sep]},
				{x: new Date(2013,09,01), y:[0, Oct]},
				{x: new Date(2013,10,01), y:[0, Nov]},
				{x: new Date(2013,11,01), y:[0, Dec]} 	
			]
		}
		]
	});
	chart.render();
}
</script>
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
	if(validateFabricName() && validateContent() && validateTheam() && validateColour() && validateDescription() && validateSupplierDescription() && validateCategory() && validatePrice() && validateImage())
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
function validateImage()
{
	var FImage = document.getElementById("ImageFieldID").value;
	if((FImage==null)||(FImage=="")||(FImage==" ")){
		alert("Add image")
		return false;
	}
	else
		return true;
}
</script>


</head>

<body>
<script type="text/javascript" src="canvasjs/canvasjs.min.js"></script>
<table class="TopBarClass" width="100%" bgcolor="#FFFFFF" border="0" align="center">
  <tr>
    <td height="25" width="0%"></td>
    <td height="25" width="720"></td>
    <td height="25" width="70"><font face="Segoe UI" size="2"><center><i>My eStore</i></center></font></td>
    <td height="25" width="160"><font face="Segoe UI" size="2"><center><i>Hi! <a href="Login.html">Sign in</a> or <a href="Register.html">Register</a></i>
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
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.html">Advanced</a></i></font></font>
    </center></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table class="MenuBar"  height="40" width="1000" border="0" align="center">
  <tr>
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.html" >Home</a> | <a href="About Us.html">About Us</a> | <a href="Contact Us.html">Contact Us</a> | <a href="Help.html">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Supplier Statistics</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center" bgcolor="#FFFFFF">
<tr>
  <td height="39" colspan="3"><font color="#6E6E6E" face="Segoe UI" size="+2">
   <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT *
											FROM `suppliers`
												WHERE `UserID` = '".$_GET['title']."'"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo $row["FirstName"]." ".$row["LastName"];					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
  </font></td>
  </tr>
  <tr>
  <td width="500" rowspan="10">
   <div id="chartContainer" style="height: 245px; width: 100%;"></div>
  </td>
  <td width="243" height="30"><font color="#6E6E6E" face="Segoe UI">Total </font></td>
  <td width="243"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td> 
  </tr>
  <tr>
  <td width="243" height="30" bgcolor="#F2F2F2">&nbsp;</td>
  <td width="243" bgcolor="#F2F2F2">&nbsp;</td>
  </tr>
  <tr>
  <td width="243" height="30"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  <td width="243"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  </tr>
  <tr>
  <td width="243" height="30" bgcolor="#F2F2F2">&nbsp;</td>
  <td width="243" bgcolor="#F2F2F2">&nbsp;</td>
  </tr>
  <tr>
  <td width="243" height="30"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  <td width="243"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  </tr>
  <tr>
  <td width="243" height="30" bgcolor="#F2F2F2">&nbsp;</td>
  <td width="243" bgcolor="#F2F2F2">&nbsp;</td>
  </tr>
  <tr>
  <td width="243" height="30"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  <td width="243" height="30"><font color="#6E6E6E" face="Segoe UI">No of Items Supply</font></td>
  </tr>
   <tr>
  <td width="243" height="30" bgcolor="#F2F2F2">&nbsp;</td>
  <td width="243" height="30" bgcolor="#F2F2F2">&nbsp;</td>
  </tr>
  <tr>
 
  </tr>
  <tr>
  <td width="243" height="30" bgcolor="#5882f" align="center"><font color="#FFFFFF" face="Segoe UI">
  <?php 
  
  echo"<a href='Add_Stock.php?title=".$_SESSION["UserID"]."' style='color:#FFF'>Add Stock</a>";
  
  ?>
  </font>
  </td>
  <td width="243" height="30" bgcolor="#5882f" align="center"><font color="#FFFFFF" face="Segoe UI">
  <?php 
  
  echo"<a href='Add_Stock.php?title=".$_SESSION["UserID"]."' style='color:#FFF'>Edit Profile</a>";
  
  ?>  
  </font>
  </td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#FFFFFF"><font color="#6E6E6E" size="3" face="Segoe UI">Stock Summary</font></td>
  </tr>
  <tr>
    <td height="320" colspan="3" valign="top" bgcolor="#F2F2F2"><table width="100%" border="0">
      <tr>
        <td width="20%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Name</font></div></td>
        <td width="10%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Content</font></div></td>
        <td width="8%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Colour</font></div></td>
        <td width="7%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Theam</font></div></td>
        <td width="22%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Description</font></div></td>
        <td width="9%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Price</font></div></td>
        <td width="8%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Qty</font></div></td>
        <td width="16%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Status</font></div></td>
      </tr>
      <?php
		  
		  
		  			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT *
											FROM `fabrics`
											WHERE `SupplierID` =".$_SESSION["UserID"].""); 				
					
									
					  while(($row = mysql_fetch_array($result)))
					  {
						   echo
					"<tr>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Name"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Content"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["colour"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Theme"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Description"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Price"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Quty"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Status"]."</font></div></td>
      </tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>    
    </table></td>
  </tr>
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
    <td height="20px" width="499"><p><font face="Segoe UI">Copyright © 2015 RFabrics.com; All Rights Reserved. User Agreement, Privacy and Cookies</font></p></td>
    <td height="20px" width="499">&nbsp;</td>
    <td height="20px" width="%"></td>
  </tr>
</table>
</body>
</html>