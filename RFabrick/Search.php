<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search</title>

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
    <?php
    
	 session_start();	
	
	if(!isset($_SESSION["UserName"]))
	{
		
		echo"
		<td height='25' width='70'><font face='Segoe UI' size='2'><center><i></i></center></font></td>
    	<td height='25' width='160'>
    	<font face='Segoe UI' size='2'><center><i>Hi! <a href='Login.php'>Sign in</a> or <a href='Register.php'>Register</a>	</i>
    </center></font>";
		
	}else if(isset($_SESSION["UserName"]))
	{
		if($_SESSION["UserName"] == "")
		{
			echo"
		<td height='25' width='70'><font face='Segoe UI' size='2'><center><i> <a href='Login.php'></a></i></center></font></td>
    	<td height='25' width='160'>
    	<font face='Segoe UI' size='2'><center><i>Hi! <a href='Login.php'>Sign in</a> or <a href='Register.php'>Register</a></i>
    </center></font>";
		}else
		{
			if($_SESSION["PrivacyBit"] == 2)
			{
				echo"
	<td height='25' width='70'><center><i> <a style='color:#000' href='Supplier_Statistics.php?title=".$_SESSION["UserID"]."'><font face='Segoe UI' size='2'>My eStore</font></a></i></center></td>";
			}
			if($_SESSION["PrivacyBit"] == 1)
			{
				echo"
	<td height='25' width='70'><center><i> <a style='color:#000' href='Buyer_Statics.php?title=".$_SESSION["UserID"]."'><font face='Segoe UI' size='2'>My eStore</font></a></i></center></td>";
			}
			if($_SESSION["PrivacyBit"] == 4)
			{
				echo"
	<td height='25' width='70'><center><i> <a style='color:#000' href='Stock-keeper_Dashboard.php'><font face='Segoe UI' size='2'>My eStore</font></a></i></center></td>";
			}
	
			echo"<td height='25' width='160'>
    	<font face='Segoe UI' size='2'><center>Hi! <a href='Login.php'>".$_SESSION["UserName"]."</a> | <input type='submit' name='logOutButton' id='logOutButton' onclick='logOut()' value='Log out' style='background:none;border:none' />
    </center></font>";
		}
	}
	
	?>	
    </td>
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
  <form id="search" name="search" method="post" action="">
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    </form>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.php">Advanced</a></i></font></font>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Search</i></font></td>
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
    <td width="1000px" bgcolor="#FFFFFF"><table width="1000" border="0">
    
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("
					SELECT f.FabricID, f.Name, s.FirstName, s.LastName, f.Price, f.Description, f.Image, f.Theme 
					FROM fabrics f join Suppliers s on f.SupplierID = s.UserID join useraccounts u on u.UserID = s.UserID
					WHERE (Name like '%".$_GET['title']."%'
					Or f.Content like '%".$_GET['title']."%'
					Or f.colour like '%".$_GET['title']."%'
					Or f.Theme like '%".$_GET['title']."%'
					Or f.Description like '%".$_GET['title']."%'
					Or s.FirstName like '%".$_GET['title']."%'
					Or s.LastName like '%".$_GET['title']."%'
					Or s.BrandName like '%".$_GET['title']."%'
					Or s.Description like '%".$_GET['title']."%')
					AND f.Status LIKE 'Yes'
					"); 
					
					
									
					  while(($row = mysql_fetch_array($result)))
					  {
						  	$SearchName = $row["Theme"];
							setcookie("Theme",$SearchName,time()+3600);	
						  						  
						   echo
					"<tr>
        <td width='150' height='150' rowspan='4'><img src=".$row["Image"]." width='150' height='150' /></td>
        <td width='5' height='150' rowspan='4'>&nbsp;</td>
        <td colspan='4' bgcolor='#FFFFFF'><font color='#6E6E6E' face='Segoe UI' size='4'><b>".$row["Name"]."</b></font></td>
        </tr>
      <tr>
        <td bgcolor='#FFFFFF'><font color='#6E6E6E' face='Segoe UI' size='2'>By ".$row["FirstName"]." ".$row["LastName"]."</font></td>
        <td colspan='2' bgcolor='#FFFFFF'><font color='#6E6E6E' face='Segoe UI' size='2'>$ ".$row["Price"]."</font></td>
        </tr>
      <tr>
        <td height='70' colspan='4' valign='top' bgcolor='#FFFFFF'><font color='#6E6E6E' face='Segoe UI' size='2'>".$row["Description"]."</font></td>
        </tr>
      <tr>
        <td height='21' colspan='2'>&nbsp;</td>
        <td width='100' bgcolor='#5882fa' align='center'><font color='#FFFFFF' face='Segoe UI'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."' style='color:#FFF'>Buy</a></font></td>
        <td width='100' bgcolor='#5882fa' align='center'><font color='#FFFFFF' face='Segoe UI'><a href='Compare.php?title=".$row["FabricID"]."' style='color:#FFF'>Compare</a></font></td>
      </tr>";
						
											  	
						  }
					  mysql_close($con);
					  
		  
       
        ?>      
    </table>
      <table width="1000" border="0" bgcolor="#FAFAFA">
        <tr>
        <td width="440px">&nbsp;</td>
        <td width="60px"><div align="right"><font color="#6E6E6E" face="Segoe UI" size="2"><i>Previous</i> |</font></div></td>
        <td width="60px"><div align="left"><font color="#6E6E6E" face="Segoe UI" size="2"><i> Next</i></font></div></td>
        <td width="440px">&nbsp;</td>
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
<?php 
	
		if(isset($_POST["Search"]))
		{
			header("Location:Search.php?title=".$_POST["Search"]."");
			
		}
?>