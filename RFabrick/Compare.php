<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Compare</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

<script type="text/javascript">

function Compare()
{		
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/Compare.php?fabriID="+document.getElementById("DropDown").value,false);
		xamlhttp.send(null);
		
		var response = xamlhttp.responseText;
		var res = response.split(',');		
		
		document.getElementById("price").innerHTML = res[0];	
		document.getElementById("colour").innerHTML = res[1];	
		document.getElementById("theme").innerHTML = res[2];	
		document.getElementById("content").innerHTML = res[3];	
		document.getElementById("availablequantity").innerHTML = res[4];
		document.getElementById("image").src = res[5];	
}
function validateSearch()
{
	if(validateSearchField())
	{
		window.location.href = "Search.php";
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
      <a href="Cart.php"><img src="Images/Cart.png" width="20" height="20" /></a>
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
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.php">Advanced</a></i></font><i><a href="Compare.php"></a></i></font><i><a href="Compare.php"></a></i></font>
    </center></font></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table class="MenuBar"  height="40" width="1000" border="0" align="center">
  <tr>
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.php">Home</a> | <a href="About Us.html">About Us</a> | <a href="Contact Us.html">Contact Us</a> | <a href="Help.html">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Compare</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100%" bgcolor="#FAFAFA" border="0" align="center">
  <tr>
    <td width="%"></td>
    <td width="1000px"><table width="900" border="0" align="center">
    	<?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `fabrics` WHERE `FabricID` = '".$_GET['title']."'"); 
					
					$row = mysql_fetch_array($result);			  
					
					mysql_close($con);
	
        ?>
      <tr>
        <td width="300" height="250">&nbsp;</td>
        <td width="5" rowspan="7">&nbsp;</td>
        <td width="300" height="250"><?php echo"<img src=".$row["Image"]." width='300' height='250' />"; ?></td>
        <td width="5" rowspan="7">&nbsp;</td>
        <td width="300" height="250"><img id="image" src="Images/Fabrics 300x250.jpg" width="300" height="250" /></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right" >Name</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI"><div align="left" ><?php echo"".$row["Name"]."" ; ?>
        </div></font></td>
        <td bgcolor="#FFFFFF"><span class="custom-dropdown custom-dropdown--white">
    <select class="custom-dropdown__select custom-dropdown__select--white" onchange="Compare()" id="DropDown">
        <?php
		  
		  $con1 = mysql_connect("localhost","root","");
		  if(!$con1)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con1);
					
					$result1 = mysql_query("SELECT * FROM `fabrics` where `Status` = 'Yes' "); 
					
					  while($row1 = mysql_fetch_array($result1))
					  {
						   echo"<option value='".$row1["FabricID"]."' >".$row1["Name"]."</option>";					   
					  }	
					
					
					mysql_close($con1);
					
						
		  
       
        ?>
    </select>
</span></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right">Price</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI"><div align="left" ><?php echo"".$row["Price"]."" ; ?></div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
        <div align="left" id="price" ></div></font></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right">Colour</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI"><div align="left" ><?php echo"".$row["colour"]."" ; ?></div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="left" ><font id="colour" color="#6E6E6E" face="Segoe UI"></font></div>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right">Theme</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI"><div align="left" ><?php echo"".$row["Theme"]."" ; ?></div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="left" ><font id="theme" color="#6E6E6E" face="Segoe UI"></font></div>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right">Content</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI"><div align="left" ><?php echo"".$row["Content"]."" ; ?></div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="left" ><font id="content" color="#6E6E6E" face="Segoe UI"></font></div>
        </font></td>
      </tr>
      <tr>
        <td bgcolor="#F2F2F2"><font color="#6E6E6E" face="Segoe UI"><div align="right">Available Quantity</div></font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="left" ><font color="#6E6E6E" face="Segoe UI"><?php echo"".$row["Quty"]."" ; ?></font></div>
        </font></td>
        <td bgcolor="#FFFFFF"><font color="#6E6E6E" face="Segoe UI">
          <div align="left" ><font id="availablequantity" color="#6E6E6E" face="Segoe UI"></font></div>
        </font></td>
      </tr>
      <tr>
        <td colspan="5" bgcolor="#FFFFFF">&nbsp;</td>
        </tr>
    </table></td>
    <td width="%"></td>
  </tr>
</table>
<table width="1000" align="center">
  <tr>
    <td>&nbsp;</td>
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
