<?php

session_start();

if($_SESSION["PrivacyBit"] != 4)
{	
		header("Location: Login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Stock-keeper  Dashboard</title>

<script type="text/javascript">
window.onload = function () {
	
	var NewStock = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT SUM(`Quty`) Total FROM `fabrics` WHERE `Status` Like 'No' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						if($Total == NULL)
						{
							echo "0";
						}else
						{
							echo "$Total";
						}
						mysql_close($con);	
					
					?>);
					
	var Purchasing = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT SUM(`Quty`) Total FROM `fabrics` WHERE `Status` Like 'Yes' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						if($Total == NULL)
						{
							echo "0";
						}else
						{
							echo "$Total";
						}
						mysql_close($con);	
					
					?>);
					
	var Available = parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT SUM(`Quty`) Total FROM `include`;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						if($Total == NULL)
						{
							echo "0";
						}else
						{
							echo "$Total";
						}
						mysql_close($con);	
					
					?>);
	
	var chart = new CanvasJS.Chart("chartContainer",
	{
		title:{
			text: "Statistical Overview"
		},
                animationEnabled: true,
		legend:{
			verticalAlign: "center",
			horizontalAlign: "left",
			fontSize: 20,
			fontFamily: "Segoe UI"        
		},
		theme: "theme2",
		data: [
		{        
			type: "pie",       
			indexLabelFontFamily: "Segoe UI",       
			indexLabelFontSize: 20,
			indexLabel: "{label} {y}%",
			startAngle:-20,      
			showInLegend: true,
			toolTipContent:"{legendText} {y}%",
			dataPoints: [
				{  y: NewStock, legendText:"Pending", label: "Pending" },
				{  y: Purchasing, legendText:"Approved", label: "Approved" },
				{  y: Available, legendText:"Purchest", label: "Purchest" },
				
			]
		}
		]
	});
	chart.render();
	
	
}
</script>

<style type="text/css">

body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">
<link href="css/reveal-it.css" rel="stylesheet" type="text/css"/>
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
</script>

</head>

<body>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/reveal-it.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="canvasjs/canvasjs.min.js"></script>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Stock-keeper  Dashboard</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10"></td>
  </tr>
</table>
<table width="1000" bgcolor="#fafafa" border="0" align="center">
  <tr>
    
    <td width="969" height="85" align="left" bgcolor="#FFFFFF"><div id="TabbedPanels1" class="VTabbedPanels">
      <ul class="TabbedPanelsTabGroup" >
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Overview</font></li>
<li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Manage Stocks</font></li>
</ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <table width="100%" height="762" border="0" align="left" bordercolor="#fafafa">
            <tr>
              <td height="39" align="left" valign="top" bgcolor="#FFFFFF"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Overview</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" height="625" border="0">
                <tr>
                  <td height="21" colspan="2" align="left" valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Stock Overview</font></div></td>
                </tr>
                <tr>
                  <td height="135" colspan="2"><div id="chartContainer" style="height:400px; width:750px;"></div></td>
                </tr>
                <tr>
                  <td width="50%" height="31" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Content</font></div></td>
                  <td width="50%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Colour</font></div></td>
                </tr>
                <tr>
                  <td height="67" valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of Content	:</p>
                    <p>Total No of Content Available:</p>
                   
                  </font> </div></td>
                  <td valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of Colour	:</p>
                    <p>Total No of Colour Available:</p>
                 
                  </font> </div></td>
                </tr>
                <tr>
                  <td height="21" valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Theams</font></div></td>
                  <td valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Suppliers</font></div></td>
                </tr>
                <tr>
                  <td height="65" valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of new Theams	:</p>
                    <p>Total No of Theams Available:</p>
                 
                  </font> </div></td>
                  <td valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of new Suppliers	:</p>
                    <p>Total No of Stock Available	:</p>
                 
                  </font> </div></td>
                </tr>
                <tr>
                  <td height="21" valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Purchasing  </font></div></td>
                  <td valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Stock Transaction  </font></div></td>
                </tr>
                <tr>
                  <td height="65" valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of new purchasing  	:</p>
                    <p>Total Cost of Purchasing  :</p></font>
                 
                   </div></td>
                  <td valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of new Transaction  	:</p>
                    <p>Total No of Transaction Qty	:</p></font>
                 
                   </div></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
<div class="TabbedPanelsContent">
  <table width="100%" height="763" border="0">
            <tr>
              <td height="40" align="left" valign="top"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Manage Stocks</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" border="0">
                <tr>
                  <td width="9%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Stock ID</font></div></td>
                  <td width="41%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Name</font></div></td>
                  <td width="10%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Qty</font></div></td>
                  <td width="10%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Price</font></div></td>
                  <td width="13%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Status</font></div></td>
                  <td width="17%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Action</font></div></td>
                </tr>
                <?php
		  
		  			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `fabrics`"); 			
									
					  while(($row = mysql_fetch_array($result)))
					  {
						   echo
				"<tr>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["FabricID"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Name"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Quty"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Price"]."</font></div</td>";
				  
				  if($row["Status"] == "No")
				  {
				  		echo"
                  		<td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>Pending</font></div></td>
				  		<td align='center' bgcolor='#5882FA' ><div><font color='#FFFFFF' size='3' face='Segoe UI'><a href='ApproveItem.php?title=".$row["FabricID"]."'><font color='FFFFFF' size='3' face='Segoe UI'>Approve</font></a></font></div</td>";
				  }else
				  {
					  echo"
					  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>Approved</font></div></td>
					  <td align='center' bgcolor='#FF0000' ><div><font color='#FFFFFF' size='3' face='Segoe UI'><a href='SuspandItem.php?title=".$row["FabricID"]."'><font color='FFFFFF' size='3' face='Segoe UI'>Suspand</font></a></font></div</td>";
				  }
				
				echo"</tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>                
              </table></td>
            </tr>
          </table>
      </div>
</div>
    </div></td>
    
    
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
