<?php
		  
		 session_start();
		 
		 if($_SESSION["PrivacyBit"] != 1)
		{
			header("Location: Login.php");
		}
		if(!isset($_SESSION["CartID"]) || $_SESSION["CartID"] == "")
		{
			header("Location: Home.php");
		}
		  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

<script type="text/javascript">

function Purchase()
{
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/Purchase.php?ID="+<?php 
						$CartID = $_SESSION["CartID"];
						echo "$CartID" ;
				  ?>,false);
		xamlhttp.send(null);
		window.location.href = "Home.php";
		
}

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
      <a href="Cart.html"><img src="Images/Cart.png" width="20" height="20" /></a>
    </center></td>
    <td height="25" width="%"></td>
  </tr>
</table>
<table id="Search" width="1000" border="0" align="center">
  <tr>
    <td width="191" rowspan="3"><a href="Home.html"><img src="Images/Logo.png" width="180" height="70" /></a></td>
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
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.html">Home</a> | <a href="About Us.html">About Us</a> | <a href="Contact Us.html">Contact Us</a> | <a href="Help.html">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Shopping Cart</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center" bgcolor="#FFFFFF">
  <tr>
    <td height="250" colspan="4" valign="top" bgcolor="#F2F2F2"><table width="100%" border="0">
      <tr>
        <td width="38%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Name</font></div></td>
        <td width="12%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Colour</font></div></td>
        <td width="12%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Price</font></div></td>
        <td width="11%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Qty</font></div></td>
        <td width="27%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Date</font></div></td>
      </tr>
      <?php
		  
		   			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT c.CartID, F.Name, F.colour, F.Price, i.Quty, c.Date
											FROM include i
											JOIN cart c ON c.CartID = i.CartID
											JOIN fabrics f ON f.FabricID = i.FabricID
											WHERE c.CartID = ".$_SESSION["CartID"]." and c.Status = 0"); 				
					
									
					  while(($row = mysql_fetch_array($result)))
					  {
						  
						   echo
					"<tr>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Name"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["colour"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Price"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Quty"]."</font></div></td>
        <td bgcolor='#FFFFFF'><div><font color='#6E6E6E' size='3' face='Segoe UI'>".$row["Date"]."</font></div></td>
      </tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>
    </table></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td width="488"><center><input type="text" placeholder="First Name" id="FabricNameFieldID" name="FabricNameFieldID" class="resizedTextbox8"/></center></td>
    <td colspan="3" align="center" >
    	<table width="80%" height="100%" border="0">
  		<tr>
    		<td height="100%" bgcolor="#F2F2F2"><center><div><font color='#6E6E6E' size='3' face='Segoe UI'><?php echo $_SESSION["Total"] ?></font></div></center></td>
  		</tr>
		</table>
</td>
  </tr>
  <tr>
    <td height="5" colspan="4"></td>
  </tr>
  <tr>
    <td><center>
      <textarea class="resizedTextbox9"  id="FabricNameFieldID" placeholder="Address"></textarea>
    </center></td>
    <td colspan="3"><center>
      <textarea class="resizedTextbox9"  id="FabricNameFieldID" placeholder="Biling Address"></textarea>
    </center></td>
  </tr>
  <tr>
    <td height="5" colspan="4"></td>
  </tr>
  <tr>
    <td><center><input type="text" placeholder="Telephone" id="FabricNameFieldID" class="resizedTextbox8"/></center></td>
    <td colspan="3"><center><input type="text" placeholder="eMail Address" id="FabricNameFieldID" class="resizedTextbox8"/></center></td>
  </tr>
  <tr>
    <td height="5" colspan="4"></td>
  </tr>
  <tr>
    <td><center><input type="text" placeholder="Card Number" id="FabricNameFieldID" class="resizedTextbox8"/></center></td>
    <td width="50"></td>
    <td width="395"><font color="#6E6E6E" size="2" face="Segoe UI">Payment Methode: 
      <form id="form1" name="form1" method="post" action="">
        Creadit Card
        <input type="radio" name="radio" id="CC" value="CC" />
        <label for="CC"></label>
         Debit Card    
         <input type="radio" name="radio" id="dd" value="dd" />
        <label for="dd"></label>
      </form>
    </font></td>
    <td width="49">&nbsp;</td>
  </tr>
  <tr>
    <td height="5" colspan="4"></td>
  </tr>
  <tr>
    <td><center><input type="text" placeholder="CVC" id="FabricNameFieldID" class="resizedTextbox8"/></center></td>
    <td></td>
    <td><font color="#6E6E6E" size="2" face="Segoe UI">Card Type: 
      <form id="form1" name="form1" method="post" action="">
        Visa
        <input type="radio" name="radio" id="vs" value="vs" />
        <label for="vs"></label>
         Master    
         <input type="radio" name="radio" id="ms" value="ms" />
        <label for="ddms"></label>
      </form>
    </font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="10" colspan="4"></td>
  </tr>
  <tr>
    <td height="40"><div align="right"><input onclick="Purchase()" type="submit" class="but" name="Pay" id="Pay" value="Pay" style="border-style:hidden;height:40px;width:150px;background:#5882fa;color:#FFF"/></div></td>
    <td height="40" colspan="3"><input type="submit" class="but" name="Shop More" id="Shop More" value="Shop More" style="border-style:hidden;height:40px;width:150px;background:#5882fa;color:#FFF"/></td>
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