<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">
<link rel="stylesheet" type="text/css" href="engine1/style.css" />

<script type="text/javascript" src="engine1/jquery.js"></script>

<script type="text/javascript">

function logOut()
{
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/LogOutUsers.php?userName="+" ",false);
		xamlhttp.send(null);
		
		window.location.href = "Home.php";	
		
}

function validateSearch()
{
	if(validateSearchField())
	{
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
    <td width="194" rowspan="3"><a href="Home.php"><img src="Images/Logo.png" width="180" height="70" /></a></td>
    <td colspan="2">&nbsp;</td>
    <td width="92">&nbsp;</td>
  </tr>
  <tr>
  <form id="search" name="search" method="post" action="">
    <td width="570" height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    </form>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
    <i><a href="Advanced_Search.php"><font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.php">Advanced</a></i></font></font></a></i>
    </center></font></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Home</i></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="2px"></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td width="600" height="300" rowspan="3"><!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li>  
		<?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 1"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]."  alt='SliderIMG1' title='' id='wows1_0'/>";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
        </li>
		<li>
        <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 2"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]."  alt='SliderIMG2' title='' id='wows1_1'/>";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
        </li>
		<li>
        <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 3"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]."  alt='SliderIMG3' title='' id='wows1_2'/>";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
        </li>
		<li>
        <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 4"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]."  alt='SliderIMG4' title='' id='wows1_3'/>";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
        </li>
		<li>
        <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 5"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]."  alt='SliderIMG5' title='' id='wows1_4'/>";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
        </li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="SliderIMG1"><span><img src="data1/tooltips/sliderimg1.jpg" alt="SliderIMG1"/>1</span></a>
		<a href="#" title="SliderIMG2"><span><img src="data1/tooltips/sliderimg2.jpg" alt="SliderIMG2"/>2</span></a>
		<a href="#" title="SliderIMG3"><span><img src="data1/tooltips/sliderimg3.jpg" alt="SliderIMG3"/>3</span></a>
		<a href="#" title="SliderIMG4"><span><img src="data1/tooltips/sliderimg4.jpg" alt="SliderIMG4"/>4</span></a>
		<a href="#" title="SliderIMG5"><span><img src="data1/tooltips/sliderimg5.jpg" alt="SliderIMG5"/>5</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#">jquery slideshow</a> by Zinnat</div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section --></td>
    <td width="10" rowspan="3"></td>
    <td width="380" height="196">
    
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 6"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='376' height='196' />";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
    </td>
  </tr>
  <tr>
    <td height="5"></td>
  </tr>
  <tr>
    <td height="92">
    <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM `banners` WHERE BannerID = 7"); 
					
					  while($row = mysql_fetch_array($result))
					  {
						   echo"<img src=".$row["Image"]." width='376' height='92' />";					   
					  }	
					
					
					mysql_close($con);
					
						
		  
       
        ?>
    
    </td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"></td>
  </tr>
  <tr>
    <td height="25px"><font color="#6E6E6E" size="5" face="Segoe UI"><a href="More_Stocks.html">Recent Stock</a></font></td>
  </tr>
  <tr>
    <td height="10px"></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
  
  <?php
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID`=(SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes') order by FabricID desc"); 
					
									
					  while($row = mysql_fetch_array($result))
					  {
						   echo"
						    <td style='background-image: url(".$row["Image"].");background-size:325px 340px' width='325px' height='312px' rowspan='3' ><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row["Name"]."</h2>
     			 			<p class='intro'>$ ".$row["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							
							$ItemID = $row["FabricID"];							
					  }
					
					  
					  $result1 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");  
					
					 $count = 0;
					  while(($row1 = mysql_fetch_array($result1)) && ($count == 0))
					  {
    						echo"<td width='5px' height='150'>&nbsp;</td>
    						<td style='background-image: url(".$row1["Image"].");background-size:330px 175px' width='330px' height='150px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row1["Name"]."</h2>
      						<p class='intro'>$ ".$row1["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row1["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$ItemID = $row1["FabricID"];	
							$count = 1;							
					  }					  
					  
					  $result2 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");  
					
					 $count = 0;
					  while(($row2 = mysql_fetch_array($result2)) && ($count == 0))
					  {
    						echo"<td width='5px' height='150'>&nbsp;</td>
    						<td width='150px' height='150'  style='background-image: url(".$row2["Image"].");background-size:150px 165px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row2["Name"]."</h2>
      						<p class='intro'>$ ".$row2["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row2["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$ItemID = $row2["FabricID"];	
							$count = 1;							
					  }	
					  
					  $result3 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");
							
					  $count = 0;
					  while(($row3 = mysql_fetch_array($result3)) && ($count == 0))
					  {	
   							echo"<td width='5px' height='150'>&nbsp;</td>
    						<td width='150px' height='150'  style='background-image: url(".$row3["Image"].");background-size:150px 170px'><div class='container'>
 							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row3["Name"]."</h2>
      						<p class='intro'>$ ".$row3["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row3["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>
  							</tr>
  							<tr>
    						<td width='5px' height='5'></td>
    						<td  width='330px' height='5px'></td>
    						<td width='5px' height='5'></td>
    						<td width='150px' height='5'></td>
    						<td width='5px' height='5'></td>
    						<td width='150px' height='5'></td>
  							</tr>
  							<tr>
    						<td width='5px' height='150'>&nbsp;</td>";
							$ItemID = $row3["FabricID"];	
							$count = 1;							
					  }	
						
					   	$result4 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");
							
					  $count = 0;
					  while(($row4 = mysql_fetch_array($result4)) && ($count == 0))
					  {		
							echo"
    						<td style='background-image: url(".$row4["Image"].");background-size:330px 170px' width='330px' height='150px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row4["Name"]."</h2>
      						<p class='intro'>$ ".$row4["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row4["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$ItemID = $row4["FabricID"];	
							$count = 1;							
					  }	
						
					  $result5 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");		
					  $count = 0;
					  while(($row5 = mysql_fetch_array($result5)) && ($count == 0))
					  {	
							echo"
    						<td width='5px' height='150'>&nbsp;</td>
    						<td width='150px' height='150' style='background-image: url(".$row4["Image"].");background-size:150px 180px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row5["Name"]."</h2>
      						<p class='intro'>$ ".$row5["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row5["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$ItemID = $row5["FabricID"];	
							$count = 1;							
					  }	
							
					$result6 = mysql_query("SELECT * FROM  `fabrics` where `status` = 'Yes' and `FabricID` < $ItemID order by FabricID desc");		
					  $count = 0;
					  while(($row6 = mysql_fetch_array($result6)) && ($count == 0))
					  {	
							echo"
    						<td width='5px' height='150'>&nbsp;</td>
    						<td width='150px' height='150' style='background-image: url(".$row6["Image"].");background-size:150px 170px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
      						<h2 class='title' >".$row6["Name"]."</h2>
      						<p class='intro'>$ ".$row6["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row6["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$ItemID = $row6["FabricID"];	
							$count = 1;							
					  }	
						  
					  				
					
					mysql_close($con);				
        ?>  
  </tr>  
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"></td>
  </tr>
  <tr>
    <td height="25px"><font color="#6E6E6E" size="5" face="Segoe UI"><a href="More_Stocks.html">Recommended Stock</a></font></td>
  </tr>
  <tr>
    <td height="10px"></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
  <?php
  
  if(!isset($_COOKIE["Theme"]))
  {
	  $_COOKIE["Theme"] = "";
  }
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID` = ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-7)) or `Theme` = '".$_COOKIE["Theme"]."' order by FabricID desc"); 
					
					$fid1 = 1;
					$counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
    						<td width='150px' height='150' style='background-image: url(".$row["Image"].");background-size:150px 150px'><div class='container'>
  							<div class='box'>
   							<div class='cover left'>
      						<h2 class='title' >".$row["Name"]."</h2>
      						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$counts = 1;
							$fid1 = $row["FabricID"];
					  }
					  
					  	
					mysql_close($con);		
										  
					

    echo"<td width='5px' height='150'>&nbsp;</td>";
    
    	
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-8) or `Theme` = '".$_COOKIE["Theme"]."') and (`FabricID` != $fid1 )order by FabricID desc"); 
					
					
					  $fid2 = 1;				
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td width='150px' height='150' style='background-image: url(".$row["Image"].");background-size:150px 150px'><div class='container'>
  							<div class='box'>
   							<div class='cover left'>
      						<h2 class='title' >".$row["Name"]."</h2>
      						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
					     $fid2 = $row["FabricID"];
						 $counts = 1;	
					  }
					  
					  mysql_close($con);			
		

    echo "<td width='5px' height='150'>&nbsp;</td>";
    
 
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-9) or `Theme` = '".$_COOKIE["Theme"]."') and ((`FabricID` != $fid1) and (`FabricID` != $fid2)) order by FabricID desc"); 
					
						
					  $fid3 = 1;				
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td style='background-image: url(".$row["Image"].");background-size:325px 312px' width='325px' height='312px' rowspan='3'><div class='				container'>
  							<div class='box'>
    						<div class='cover left'>
    						<h2 class='title' >".$row["Name"]."</h2>
    						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
    						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$fid3 = $row["FabricID"];
							$counts = 1;							
					  }
					  
					  mysql_close($con);			
		
    
    
    echo"<td width='5px' height='150px'>&nbsp;</td>";
    
  
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-10) or `Theme` = '".$_COOKIE["Theme"]."') and ((`FabricID` != $fid1) and (`FabricID` != $fid2) and (`FabricID` != $fid3)) order by FabricID desc"); 
					
									
					  $fid4 = 1;				
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td style='background-image: url(".$row["Image"].");background-size:330px 150px' width='330px' height='150px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
    						<h2 class='title' >".$row["Name"]."</h2>
    						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
    						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$fid4 = $row["FabricID"];
							$counts = 1;
							
					  }
					  
					  mysql_close($con);			
		
   
  	echo"</tr>
    
  <tr>
    <td width='150px' height='5'></td>
    <td width='5px' height='5'></td>
    <td width='150px' height='5'></td>
    <td width='5px' height='5'></td>
    <td width='5px' height='5px'></td>
    <td width='330px' height='5px'></td>
  </tr>
  
  <tr>";
  
    
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-11) or `Theme` = '".$_COOKIE["Theme"]."') and ((`FabricID` != $fid1) and (`FabricID` != $fid2) and (`FabricID` != $fid3) and (`FabricID` != $fid4))order by FabricID desc"); 
					
					
					  $fid5 = 1;				
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td width='150px' height='150' style='background-image: url(".$row["Image"].");background-size:150px 150px'><div class='container'>
  							<div class='box'>
   							<div class='cover left'>
      						<h2 class='title' >".$row["Name"]."</h2>
      						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
					     $fid5 = $row["FabricID"];
						 $counts = 1;	
					  }
					  
					  mysql_close($con);			
		
    
    
    echo "<td width='5px' height='150'>&nbsp;</td>";    
   
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-12) or `Theme` = '".$_COOKIE["Theme"]."') and ((`FabricID` != $fid1) and (`FabricID` != $fid2) and (`FabricID` != $fid3) and (`FabricID` != $fid4) and (`FabricID` != $fid5))order by FabricID desc"); 
					
					
					  $fid6 = 1;				
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td width='150px' height='150' style='background-image: url(".$row["Image"].");background-size:150px 150px'><div class='container'>
  							<div class='box'>
   							<div class='cover left'>
      						<h2 class='title' >".$row["Name"]."</h2>
      						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
      						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
					     $fid6 = $row["FabricID"];
						 $counts = 1;	
					  }
					  
					  mysql_close($con);		
		
    
    echo"<td width='5px' height='150'>&nbsp;</td>
    <td width='5px' height='150px'>&nbsp;</td>";
    
    
		  
		  $con = mysql_connect("localhost","root","");
		  if(!$con)
					{
						die('could not connect: ' . mysql_error());	
					}
					
					mysql_select_db("rfabricsdatabase",$con);
					
					$result = mysql_query("SELECT * FROM  `fabrics` where (`status` = 'Yes' and `FabricID`= ((SELECT MAX(FabricID) FROM  `fabrics` where `status` = 'Yes')-13) or `Theme` = '".$_COOKIE["Theme"]."') and ((`FabricID` != $fid1) and (`FabricID` != $fid2) and (`FabricID` != $fid3) and (`FabricID` != $fid4) and (`FabricID` != $fid5) and (`FabricID` != $fid6)) order by FabricID desc"); 
					
										
					  $counts = 0;			
					  while(($row = mysql_fetch_array($result)) && ($counts == 0))
					  {
						   echo"  
        					<td style='background-image: url(".$row["Image"].");background-size:330px 150px' width='330px' height='150px'><div class='container'>
  							<div class='box'>
    						<div class='cover left'>
    						<h2 class='title' >".$row["Name"]."</h2>
    						<p class='intro'>$ ".$row["Price"]."  per Yard</p>
    						<div class='btn'><a href='Fabrics_Profile.php?title=".$row["FabricID"]."'>Buy</a></div>
    						</div>
  							</div>
							</div></td>";
							$counts = 1;
							
					  }
					  
					  mysql_close($con);			
		?>
  
  </tr>
</table>
<table width="1000" height="20px" border="0" align="center">
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
	
		if(isset($_POST["Search"]))
		{
			header("Location:Search.php?title=".$_POST["Search"]."");
			
		}
?>
