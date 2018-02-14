<?php
	
	session_start();	
	
	$ItemIDGetByTitle  = $_GET['title'];
	
	if(!isset($_SESSION["UserID"]) || $_SESSION["UserID"] =="" )
	{
		header("Location: Login.php");
	}
			
	if(!isset($_SESSION["CartID"]) || $_SESSION["CartID"] == "")
	{

		$con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT *
											FROM `cart`
											WHERE `UserID` = ".$_SESSION["UserID"]."
											AND `Status` =0"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						    $_SESSION["CartID"] = $row["CartID"];
							$_SESSION["Total"]	= $row["total"];			   
					  }	
					
					
					mysql_close($con);
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fabrics Profile</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />

<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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
function validate()
{
	if(validateQuantity())
	{
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateQuantity()
{
	var quantity = document.getElementById("qtyLevel").value;
	if((quantity==null)||(quantity=="")||(quantity==" ")){
		alert("Enter quantity")
		return false;
	}
	else if(isNaN(quantity))
	{
		alert("Enter quantity")
		return false;
	}
	else
	{
		return true;
	}
}
</script>

</head>

<body>
<table class="TopBarClass" width="100%" bgcolor="#FFFFFF" border="0" align="center">
  <tr>
    <td height="25" width="0%"></td>
    <td height="25" width="720"></td>
    <?php
    	
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
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.php">Advanced</a></i></font><i><a href="Compare.php"></a></i></font>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Fabrics Profile</i></font></td>
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
    <td width="1000px"><table width="1000" border="0" bgcolor="#FFFFFF">
      <tr>
        <td width="300" height="250" rowspan="9">
        <?php
		  	
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT f.FabricID,f.Name,f.Price,f.Image,f.Quty,f.Content,f.colour,f.Theme,f.Description,s.BrandName,s.Description FROM fabrics f Join suppliers s on f.SupplierID = s.UserID WHERE FabricID = '".$_GET['title']."'"); 
					
					$i=0;
					
					  while(($row = mysql_fetch_array($result)) && ($i<1))
					  {
						   echo"<img src=".$row["Image"]." width='300' height='250' />";
						   $i++;
					  }	
					
					
					mysql_close($con);				
        ?>
        </td>
        <td width="200" height="40">
        <?php
								
			$price =0;
			
			$con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result1 = mysql_query("SELECT f.Price, f.Quty FROM fabrics f Join suppliers s on f.SupplierID = s.UserID WHERE FabricID = '".$_GET['title']."'"); 
					$row1 = mysql_fetch_array($result1);
					
					$price = ($row1["Price"]*1.0);//Asign price -------------------------------------------------------------			
					$StockQty = $row1["Quty"];
					
					$result = mysql_query("SELECT f.FabricID,f.Name,f.Price,f.Image,f.Quty,f.Content,f.colour,f.Theme,f.Description,s.BrandName,s.Description FROM fabrics f Join suppliers s on f.SupplierID = s.UserID WHERE FabricID = '".$_GET['title']."'"); 
					
					$i=0;					
													
													
					  while($row = mysql_fetch_array($result))
					  {
						  echo "<div align='Right'><font color='#6E6E6E' face='Segoe UI' size='4'><b>".$row["Name"]."</b></font></div>
						   </td>
        <td colspan='3'>&nbsp;</td>
      </tr>
      <tr>
        <td width='200'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>By</font></div></td>
        <td colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : ".$row["BrandName"]."</font></td>
      </tr>
      <tr>
        <td width='200'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Price</font></div></td>
        <td colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : $ ".$row["Price"]."</font></td>
      </tr>
      <tr>
        <td width='200' height='23'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Content</font></div></td>
        <td height='23' colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : ".$row["Content"]."</font></td>
      </tr>
      <tr>
        <td width='200'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Theam</font></div></td>
        <td colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : ".$row["Theme"]."</font></td>
      </tr>
      <tr>
        <td width='200'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Colour</font></div></td>
        <td colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : ".$row["colour"]."</font></td>
      </tr>
      <tr>
        <td width='200'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Available Quantity</font></div></td>
        <td colspan='3'><font color='#6E6E6E' face='Segoe UI' size='3'> : ".$row["Quty"]."</font></td>
      </tr>
      <tr>
        <td colspan='4'></td>
        </tr>
      <tr>
        <td width='200' height='26'>&nbsp;</td>
        <td height='26'><div align='right'><font color='#6E6E6E' face='Segoe UI' size='3'>Quantity</font></div></td>
		<form id='form1' name='form1' method='post' action=''>
        <td width='100' height='26'><input name='qtyLevel' type='text'  id='qtyLevel' style='border-style:hidden;;height:100%;width:100%;background:#A4A4A4'/></td>
        <td width='100' height='26'><input onclick='validate()' type='submit' name='addToCart' id='addToCart' value='Add to Cart' style='border-style:hidden;height:100%;width:100%;background:#5882fa;color:#FFF'/></td>
		</form>
      </tr>";				
	 
					  }	
					 							
					mysql_close($con);
					
	
	// Insert Data in to Database -----------------------------------------------------------------------------------------
	if(isset($_POST["qtyLevel"]) && $_POST["qtyLevel"] != "")
	{
	if(!isset($_SESSION["CartID"]) || $_SESSION["CartID"] == "")
	{
			$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					mysql_select_db("rfabricsdatabase",$con);
      				
				
					$qty = $_POST["qtyLevel"];
					$Total = ($price*$qty);
					$_SESSION["Total"] = $Total;
					
					//Insert Data in to User table
					$sql ="
					INSERT INTO `rfabricsdatabase`.`cart` 
					(`CartID`, `UserID`, `Date`, `total`, `Status`) 
					VALUES (NULL, '".$_SESSION["UserID"]."', CURRENT_TIMESTAMP, '$Total', '0');
					";
					
					mysql_select_db($rfabricsdatabase, $con);
          			$Result1 = mysql_query($sql, $con) or die(mysql_error());
          			$_SESSION["CartID"] = mysql_insert_id(); 	
																												  				
					mysql_close($sql, $con);	
	}else
	{
		//If cart here update Data in to cart-----------------------------------------------------------------------
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
      				
					
					$qty = $_POST["qtyLevel"];
					$AllTotal = $_SESSION["Total"];
					$Total = ($AllTotal+($price*$qty));
					$_SESSION["Total"] = $Total;
					
					
					$sql ="
					UPDATE `rfabricsdatabase`.`cart` SET `total` = '$Total' WHERE `cart`.`CartID` = '".$_SESSION["CartID"]."' ;
					";
					
					mysql_select_db($rfabricsdatabase, $con);
          			$Result1 = mysql_query($sql, $con) or die(mysql_error());
																												  				
					mysql_close($sql, $con);	
		
		}
		
					$con2 = mysql_connect("localhost","root","");
					
					if(!$con2)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con2);		
					
					$sql2 ="
					INSERT INTO `rfabricsdatabase`.`include` (`CartID`, `FabricID`, `Quty`) VALUES ('".$_SESSION["CartID"]."', '$ItemIDGetByTitle', '".$qty."' );
					";
															  				
					mysql_query($sql2, $con2); //Execute the query
					mysql_close($sql2, $con2);
					
					
					//Update Fabric Qty Details-----------------------------------------------------------
					$con10 = mysql_connect("localhost","root","");
					
					if(!$con10)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con10);		
					
					$StockQty = $StockQty - $qty;
					$sql10 ="
					UPDATE `rfabricsdatabase`.`fabrics` SET `Quty` = '$StockQty' WHERE `fabrics`.`FabricID` = '".$_GET['title']."';
					";
															  				
					mysql_query($sql10, $con10); //Execute the query
					mysql_close($sql10, $con10);
					
					//End of updation -------------------------------------------------------------------------
					
					header("Location: Cart.php");
		
	}
					
			
		?>
      <tr>
        <td colspan="5"><div id="TabbedPanels1" class="TabbedPanels">
          <ul class="TabbedPanelsTabGroup">
            <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Fabric Desiption</font></li>
            <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Supplier Description</font></li>
          </ul>
          <div class="TabbedPanelsContentGroup">
            
            <?php
		  	
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT f.FabricID,f.Name,f.Price,f.Image,f.Quty,f.Content,f.colour,f.Theme,f.Description FDes,s.BrandName,s.Description FROM fabrics f Join suppliers s on f.SupplierID = s.UserID WHERE FabricID = '".$_GET['title']."'"); 
					
					$i=0;
					
					  while(($row = mysql_fetch_array($result)) && ($i<1))
					  {
						   echo "<div class='TabbedPanelsContent' style='background-color:#F2F2F2'><font color='#6E6E6E' ><p>".$row["FDes"]."</p></font></div>";
						   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
           
           <?php
		  	
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT f.FabricID,f.Name,f.Price,f.Image,f.Quty,f.Content,f.colour,f.Theme,f.Description FDes,s.BrandName,s.Description SDes FROM fabrics f Join suppliers s on f.SupplierID = s.UserID WHERE FabricID = '".$_GET['title']."'"); 
					
					$i=0;
					
					  while(($row = mysql_fetch_array($result)) && ($i<1))
					  {
						   echo "<div class='TabbedPanelsContent' style='background-color:#F2F2F2'><font color='#6E6E6E' ><p>".$row["SDes"]."</p></font></div>";
						   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
            
            
          </div>
        </div></td>
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
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>