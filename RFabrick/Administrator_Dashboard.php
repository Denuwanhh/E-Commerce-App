<?php

session_start();

if($_SESSION["PrivacyBit"] != 3)
{	
		header("Location: Admin_Login.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Administrator Dashboard</title>
<script type="text/javascript">
function onClickBrowseSImageI()
{
	var path = document.getElementById("BrowseSImageI").value;
	
	if((path==null)||(path=="")||(path==" "))
	{
		alert("Please select a file.")		
	}
	else
		{
			/*var xamlhttp = new XMLHttpRequest();
			xamlhttp.open("GET","PHPpages/Insert_Home_Slider_ImageI.php?path="+document.getElementById("BrowseSImageI").value,false);
			xamlhttp.send(null);*/
		}
}
</script>

<script type="text/javascript">
  window.onload = function () {
	  
	//Get Details  
	var Jan= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-01-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>); 
	var Feb= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-02-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Mar= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-03-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Apr= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-04-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var May= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-05-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Jun= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-06-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Jul= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-07-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);;
	var Aug= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-08-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Sep= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-09-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);;
	var Oct= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-10-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Nov= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-11-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	var Dec= parseInt(<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Date` LIKE '%-12-% %:%:%' ;");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>);
	
    var chart = new CanvasJS.Chart("chartContainer",
    {
      theme: "theme2",
      title:{
        text: "Activity - per month"
      },
      animationEnabled: true,
      axisX: {
        valueFormatString: "MMM",
        interval:1,
        intervalType: "month"
        
      },
      axisY:{
        includeZero: false
        
      },
      data: [
      {        
        type: "line",
        //lineThickness: 3,        
        dataPoints: [
        { x: new Date(2012, 00, 1), y: Jan },
        { x: new Date(2012, 01, 1), y: Feb},
        { x: new Date(2012, 02, 1), y: Mar},
        { x: new Date(2012, 03, 1), y: Apr },
        { x: new Date(2012, 04, 1), y: May },
        { x: new Date(2012, 05, 1), y: Jun },
        { x: new Date(2012, 06, 1), y: Jul },
        { x: new Date(2012, 07, 1), y: Aug },
        { x: new Date(2012, 08, 1), y: Sep },
        { x: new Date(2012, 09, 1), y: Oct },
        { x: new Date(2012, 10, 1), y: Nov },
        { x: new Date(2012, 11, 1), y: Dec }
        
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
    <td height="25" width="160">
    <?php
	if($_SESSION["UserName"] == "")
	{
		echo"
    	<font face='Segoe UI' size='2'><center><i>Hi! <a href='Login.php'>Sign in</a> or <a href='Register.php'>Register</a></i>
    </center></font>";
	}else
	{
	
	echo"
    	<font face='Segoe UI' size='2'><center>Hi! <a href='Login.php'>".$_SESSION["UserName"]."</a> | <input type='submit' name='logOutButton' id='logOutButton' onclick='logOut()' value='Log out' style='background:none;border:none' />
    </center></font>";
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
      <font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.php">Advanced</a></i></font>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Administrator Dashboard</i></font></td>
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
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Manage Buyers</font></li>
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Manage Suppliers</font></li>
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Activity log</font></li>
        <li class="TabbedPanelsTab" tabindex="0"><font color="#FFFFFF">Layout</font></li>
</ul>
      <div class="TabbedPanelsContentGroup">
        <div class="TabbedPanelsContent">
          <table width="100%" height="762" border="0" align="left" bordercolor="#fafafa">
            <tr>
              <td height="39" align="left" valign="top" bgcolor="#FFFFFF"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Overview</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" height="709" border="0">
                <tr>
                  <td height="21" colspan="2" align="left" valign="top" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Activity Overview</font></div></td>
                </tr>
                <tr>
                  <td height="135" colspan="2"><div id="chartContainer" style="height:400px; width:750px;"></div></td>
                </tr>
                <tr>
                  <td width="50%" height="31" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Buyers Activity Overview</font></div></td>
                  <td width="50%" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI"> Suppliers Activity Overview</font></div></td>
                </tr>
                <tr>
                  <td height="243" valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of Buyers Accounts	: 
					<?php 					
						$con = mysql_connect("localhost","root","");
					
						if(!$con)
						{
							die('could not connect: ' . mysql_error());	
						}
					
						mysql_select_db("rfabricsdatabase",$con);
      					
						$result = mysql_query("SELECT Count(`SystemLogID`) Total FROM `systemlog` WHERE `Description` LIKE 'Add New User Account as a Buyer';");
	
						$row = mysql_fetch_array($result);
						
						$Total = $row["Total"];
						echo "$Total"; 
						mysql_close($con);	
					
					?>
                    </p>
                    <p>Total No of Buyers Transaction	: 10</p>
                    <p>Total No of Buyers Acc.	: 10</p>
                    <p>Total No of Buyers Act.	: 100</p>
                    <p>Total No of Buyers Act.	: 100</p>
                  </font> </div></td>
                  <td valign="top"><div> <font color="#6E6E6E" size="2" face="Segoe UI">
                    <p>Total No of Suppliers Accounts	: 10</p>
                    <p>Total No of Transaction	: 100</p>
                    <p>Total No of Suppliers Acc.	: 100</p>
                    <p>Total No of Suppliers Act.	: 10</p>
                    <p>Total No of Suppliers Act.	: 10</p>
                  </font> </div></td>
                </tr>
              </table></td>
            </tr>
          </table>
        </div>
        <div class="TabbedPanelsContent">
          <table width="100%" height="763" border="0">
            <tr>
              <td height="40" align="left" valign="top"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Manage Buyers</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" border="0">
                <tr>
                  <td width="15%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Buyers ID</font></div></td>
                  <td width="35%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Name</font></div></td>
                  <td width="35%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">eMail</font></div></td>
                  <td width="15%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Remove</font></div></td>
                </tr>
                <?php
		  
		  			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT *
											FROM `useraccounts`
											WHERE `PrivacyBit` =1"); 			
									
					  while(($row = mysql_fetch_array($result)))
					  {
						   echo
					"<tr>
                  <td bgcolor='#fafafa' id=".$row["UserID"]." ><div><font color='#848484' size='3' face='Segoe UI'>".$row["UserID"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["UserName"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Email"]."</font></div></td>
                  <td align='center' bgcolor='#FF0000'><div>
                    <a href='RemoveUser.php?title=".$row["UserID"]."'><font color='FFFFFF' size='3' face='Segoe UI'>Remove</font></a>
                  </div></td>
                </tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>
              </table></td>
            </tr>
          </table>
        </div>
        <div class="TabbedPanelsContent">
          <table width="100%" height="763" border="0">
            <tr>
              <td height="40" align="left" valign="top"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Manage Suppliers</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" border="0">
                <tr>
                  <td width="15%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Supplier ID</font></div></td>
                  <td width="35%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Name</font></div></td>
                  <td width="35%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">eMail</font></div></td>
                  <td width="15%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Remove</font></div></td>
                </tr>
                <?php
		  
		  			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT *
											FROM useraccounts u
											JOIN suppliers s ON s.UserID = u.UserID"); 			
									
					  while(($row = mysql_fetch_array($result)))
					  {
						   echo
				"<tr>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["UserID"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["FirstName"]." ".$row["LastName"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Email"]."</font></div></td>";
				  
				  	if($row["Ratings"] == 0)
					{				
				  	echo
					"<td align='center' bgcolor='#FF0000' ><div><font color='#FFFFFF' size='3' face='Segoe UI'><a href='SuspandSupplier.php?title=".$row["UserID"]."'><font color='FFFFFF' size='3' face='Segoe UI'>Suspand</font></a></font></div</td>";
					}else
					{
				 				
				  	echo
					"<td align='center' bgcolor='#5882FA'><div><font color='#FFFFFF' size='3' face='Segoe UI'><a href='PermitSupplier.php?title=".$row["UserID"]."'><font color='FFFFFF' size='3' face='Segoe UI'>Permit</font></a></font></div</td>";
					}
					
					echo"</tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>
              </table></td>
            </tr>
          </table>
        </div>
        <div class="TabbedPanelsContent">
          <table width="100%" height="763" border="0">
            <tr>
              <td height="40" align="left" valign="top"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Activity log</font></td>
              </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" border="0">
                <tr>
                  <td width="10%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Activity ID</font></div></td>
                  <td width="20%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Date/Time</font></div></td>
                  <td width="25%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">User Name</font></div></td>
                  <td width="40%" bgcolor="#CCCCCC" ><div><font color="#FFFFFF" size="3" face="Segoe UI">Activity</font></div></td>
                </tr>
				<?php
		  
		  			$con = mysql_connect("localhost","root","");
		  			if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT s.SystemLogID, s.Date, u.UserName, s.Description
											FROM useraccounts u
											JOIN activity a ON a.UserID = u.UserID
											JOIN systemlog s ON s.SystemLogID = a.SystemLogID ORDER BY s.SystemLogID DESC"); 				
					
									
					  while(($row = mysql_fetch_array($result)))
					  {
						   echo
					"<tr>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["SystemLogID"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Date"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["UserName"]."</font></div></td>
                  <td bgcolor='#fafafa'><div><font color='#848484' size='3' face='Segoe UI'>".$row["Description"]."</font></div></td></tr>";
						
											  	
						  }
					  mysql_close($con);				  
        ?>                
              </table></td>
              </tr>
          </table>
  </div>
        <div class="TabbedPanelsContent">
          <table width="100%" height="763" border="0">
            <tr>
              <td height="40" align="left" valign="top"><font color="#848484"  size="5" face="Segoe UI">R-fabric : Layout</font></td>
            </tr>
            <tr>
              <td height="717" align="left" valign="top"><table width="100%" border="0">
                <tr>
                  <td colspan="4" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Home</font></div></td>
                  </tr>
                <tr>
                  <td colspan="4" bgcolor="#FAFAFA"><div><font color="#6E6E6E" size="3" face="Segoe UI">Slider</font></div></td>
                  </tr>
                <tr>
                  <td width="33%"><div><font color="#6E6E6E" size="3" face="Segoe UI">Image I</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	<td width="36%"><input type="file" name="BrowseSImageI" id="BrowseSImageI" value="Browse" /></td>
                  	<td width="14%" align="center" valign="middle" bgcolor="#5882FA"><input type="submit" name="UpdateSImageI" id="UpdateSImageI" value="Update" style="background:#5882fa;border:none;color:#FFF" /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Image II</font></div></td>
               <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseSImageII" id="BrowseSImageII" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateSImageII" id="UpdateSImageII" value="Update" style="background:#5882fa;border:none;color:#FFF"  /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Image III</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseSImageIII" id="BrowseSImageIII" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateSImageIII" id="UpdateSImageIII" value="Update" style="background:#5882fa;border:none;color:#FFF"  /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Image IV</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseSImageIV" id="BrowseSImageIV" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateSImageIV" id="UpdateSImageIV" value="Update" style="background:#5882fa;border:none;color:#FFF"  /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Image V</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseSImageV" id="BrowseSImageV" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateSImageV" id="UpdateSImageV" value="Update" style="background:#5882fa;border:none;color:#FFF"  /></td>
                  </form>
                </tr>
                <tr>
                  <td colspan="4" bgcolor="#FAFAFA"><div><font color="#6E6E6E" size="3" face="Segoe UI">Banners</font></div></td>
                  </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner I (376 x 196)</font></div></td>
                <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseHBannerI" id="BrowseHBannerI" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateHBannerI" id="UpdateHBannerI" value="Update" style="background:#5882fa;border:none;color:#FFF"  /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner II (376 x 92)</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseHBannerII" id="BrowseHBannerII" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateHBannerIII" id="UpdateHBannerII" value="Update" style="background:#5882fa;border:none;color:#FFF" /></td>
                  </form>
                </tr>
                <tr>
                 
                  <td></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                  <td width="17%">&nbsp;</td>
                
                </tr>
                <tr>
                  <td colspan="4" bgcolor="#CCCCCC"><div><font color="#FFFFFF" size="3" face="Segoe UI">Other</font></div></td>
                  </tr>
                <tr>
                  <td colspan="4" bgcolor="#FAFAFA"><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner</font></div></td>
                  </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner I (300 x 250)</font></div></td>
                <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseOBannerI" id="BrowseOBannerI" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateOBannerI" id="UpdateOBannerI" value="Update" style="background:#5882fa;border:none;color:#FFF" /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner II (150 x 150)</font></div></td>
                 <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseOBannerII" id="BrowseOBannerII" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateOBannerII" id="UpdateOBannerII" value="Update" style="background:#5882fa;border:none;color:#FFF" /></td>
                  </form>
                </tr>
                <tr>
                  <td><div><font color="#6E6E6E" size="3" face="Segoe UI">Banner III (150 x 150)</font></div></td>
                  <form id="form1" name="form1" method="post" action="Administrator_Dashboard.php" enctype="multipart/form-data">
                  	
                  	<td width="36%"><input type="file" name="BrowseOBannerIII" id="BrowseOBannerIII" value="Browse" /></td>
                  	<td width="14%" bgcolor="#5882FA" align="center" valign="middle"><input type="submit" name="UpdateOBannerIII" id="UpdateOBannerIII" value="Update" style="background:#5882fa;border:none;color:#FFF" /></td>
                  </form>
                </tr>
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
<?php 
		if(isset($_FILES["BrowseSImageI"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseSImageI"]["name"];
					move_uploaded_file($_FILES["BrowseSImageI"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =1;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseSImageII"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseSImageII"]["name"];
					move_uploaded_file($_FILES["BrowseSImageII"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =2;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseSImageIII"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseSImageIII"]["name"];
					move_uploaded_file($_FILES["BrowseSImageIII"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =3;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseSImageIV"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseSImageIV"]["name"];
					move_uploaded_file($_FILES["BrowseSImageIV"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =4;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseSImageV"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseSImageV"]["name"];
					move_uploaded_file($_FILES["BrowseSImageV"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =5;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseHBannerI"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseHBannerI"]["name"];
					move_uploaded_file($_FILES["BrowseHBannerI"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =6;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseHBannerII"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseHBannerII"]["name"];
					move_uploaded_file($_FILES["BrowseHBannerII"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =7;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseOBannerI"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseOBannerI"]["name"];
					move_uploaded_file($_FILES["BrowseOBannerI"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =8;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseOBannerII"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseOBannerII"]["name"];
					move_uploaded_file($_FILES["BrowseOBannerII"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =9;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		if(isset($_FILES["BrowseOBannerIII"]))
		{
		$con = mysql_connect("localhost","root","");
					
					if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
										
					$path1 = "data1/images/" . $_FILES["BrowseOBannerIII"]["name"];
					move_uploaded_file($_FILES["BrowseOBannerIII"]["tmp_name"],$path1);
		
					mysql_select_db("rfabricsdatabase",$con);					      				
					
					$sql ="
					UPDATE `rfabricsdatabase`.`banners` SET `Image` = '".$path1."' WHERE `banners`.`BannerID` =10;";				
								
					mysql_query($sql, $con); //Execute the query
	 				mysql_close($con);	//Close the connection
					
		}
		
		
		
		if(isset($_FILES["BrowseSImageI"]) || isset($_FILES["BrowseSImageII"]) || isset($_FILES["BrowseSImageIII"]) || isset($_FILES["BrowseSImageIV"]) || isset($_FILES["BrowseSImageV"]) || isset($_FILES["BrowseHBannerI"]) || isset($_FILES["BrowseHBannerII"]) || isset($_FILES["BrowseOBannerI"]) || isset($_FILES["BrowseOBannerII"]) || isset($_FILES["BrowseOBannerIII"]))
		{
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
					CURRENT_TIMESTAMP , 'Change Layout by Administrator'
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
		}

?>