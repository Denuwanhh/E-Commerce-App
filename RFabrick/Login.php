<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

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
	
		
	if(validateName() && validatePassword())
	{		
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/LogInUsers.php?userName="+document.getElementById("Namefieldid").value+"&password="+document.getElementById("passwordFiledID").value,false);
		xamlhttp.send(null);
		
		<?php
				
			session_start();			
			if(isset($_SESSION["PrivacyBit"]))
			{
			
				if($_SESSION["PrivacyBit"] == 4)
				{
					header("Location: Stock-keeper_Dashboard.php");
				}
				if($_SESSION["PrivacyBit"] == 1 || $_SESSION["PrivacyBit"] == 2)
				{
					header("Location: Home.php");
				}
			}
		?>
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateName()
{
	/*var email = document.getElementById("Namefieldid").value;
	var ap=email.indexOf("@");
	var dp=email.indexOf(".");
	if((ap>1)&&(dp-ap>1)&&(email.length-1>dp))
	{*/
		//return true;	
	/*}
	else
	{
		alert("Enter an email");
		return false;
	}*/
	
	var userName = document.getElementById("Namefieldid").value;
	if((userName==null)||(userName=="")||(userName==" ")){
		alert("Enter your User Name")
		return false;
	}
	else
		return true;
}
function validatePassword()
{
	var password = document.getElementById("passwordFiledID").value;
	if((password==null)||(password=="")||(password==" ")){
		alert("Enter your password")
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
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><center>
   <font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.html">Advanced</a></i></font>
    </center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<table class="MenuBar"  height="40" width="1000" border="0" align="center">
  <tr>
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.php">Home</a> | <a href="About_Us.php">About Us</a> | <a href="Contact_Us.php">Contact Us </a>| <a href="Help.php">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Login</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td></td>
  </tr>
</table>
<table width="100%" bgcolor="#FAFAFA" border="0" align="center">
  <tr>
    <td width="%" height="575" rowspan="5"></td>
    <td height="85" colspan="4"></td>
    <td width="495" rowspan="5" bgcolor="#FFFFFF"><table width="490px" border="0">
      <form method="get" name="form" id="form" action="" >
      <tr>
        <td width="97" height="30"><font color="#6E6E6E" face="Segoe UI"><div align="right">User Name</div></font></td>
        <td width="311" height="30" bgcolor="#F2F2F2"><input type="text" name="Namefield" id="Namefieldid" class="resizedTextbox4"/></td>
        <td width="73" height="30">&nbsp;</td>
        </tr>
      <tr>
        <td width="97" height="5"></td>
        <td width="311" height="5"></td>
        <td width="73" height="5"></td>
        </tr>
      <tr>
        <td width="97" height="30"><font color="#6E6E6E" face="Segoe UI"><div align="right">Password</div></font></td>
        <td width="311" height="30" bgcolor="#F2F2F2"><input type="password" name="passwordfield" id="passwordFiledID" class="resizedTextbox4"/></td>
        <td width="73" height="30"><input type="image" src="Images/SignIN.png" onclick="validate()" /></td>
        </tr>
      <tr>
        <td width="97px" height="30px">&nbsp;</td>
        <td height="30px"><font color="#6E6E6E" size="2" face="Segoe UI"><div align="right"><i><a href="Change Password.html">Forget User Name or Password</a></i></div></font></td>
        <td width="73px" height="30px">&nbsp;</td>
        </tr>
        </form>
    </table></td>
    <td width="%" rowspan="5"></td>
  </tr>
  <tr>
    <td width="99" height="250"></td>
    <td height="250"  width="300"colspan="2">
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 8"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='300' height='250' />";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
    </td>
    <td width="99" height="250"></td>
  </tr>
  <tr>
    <td width="99" height="2"></td>
    <td height="2" colspan="2"></td>
    <td width="99" height="2"></td>
  </tr>
  <tr>
    <td width="99" height="150"></td>
    <td width="150" height="150">
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 9"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='146' height='150' />";						   				   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
    </td>
    <td width="150" height="150">
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 10"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='146' height='150' />";						   				   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
    </td>
    <td width="99" height="150"></td>
  </tr>
  <tr>
    <td height="88" colspan="4"><table width="495" border="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table></td>
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