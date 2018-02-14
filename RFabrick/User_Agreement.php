<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Agreement</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	
	$(".accordion h3:first").addClass("active");
	$(".accordion p:not(:first)").hide();

	$(".accordion h3").click(function(){
		$(this).next("p").slideToggle("slow")
		.siblings("p:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h3").removeClass("active");
	});

});
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
    <td><font color="#6E6E6E" face="Segoe UI"><a href="Home.php">Home</a> | <a href="About_Us.php">About Us</a> | <a href="Contact_Us.php">Contact Us</a> | <a href="Help.php">Help</a></font></td>
  </tr>
</table>
<table width="1000" border="0" align="center">
  <tr>
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : User Agreement</i></font></td>
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
    <td width="1000px" bgcolor="#FFFFFF"><font color="#6E6E6E" size="2" face="Segoe UI"><p><b>Terms and Conditions</b><br />
This website – http://www.RFabrics.com (the "Site") is being made available to you free-of-charge. The terms "you", "your", and "yours" refer to anyone accessing, viewing, browsing, visiting or using the Site. The terms "RFabrics.com", "we", "us", and "our" refer to BuyinCoins.com, Inc., its affiliates and subsidiaries. We reserve the right to change the nature of this relationship at any time and to revise these Terms and Conditions from time to time as we see fit. As such, you should check these Terms and Conditions periodically. Changes will not apply to any orders we have already accepted unless the law requires. If you violate any of the terms of these Terms and Conditions you will have your access canceled and you may be permanently banned from accessing, viewing, browsing and using the Site. Your accessing, viewing, browsing and/or using the Site after we post changes to these Terms and Conditions constitutes your acceptance and agreement to those changes, whether or not you actually reviewed them. At the bottom of this page, we will notify you of the date these Terms and Conditions were last updated.<br />
<br />
Entering the Site will constitute your acceptance of these Terms and Conditions. If you do not agree to abide by these terms, please do not enter the Site.<br />
<br />
<b>DISCRIMINATION</b><br />
We do not discriminate on the basis of age, race, national origin, gender, sexual orientation or religion.<br />
<br />
<b>PRIVACY</b><br />
<br />
Please review our Privacy and Security Policy, which also governs your visit to the Site. To the extent there is a conflict between the terms of the Privacy and Security Policy and the Terms and Conditions, the Terms and Conditions shall govern.<br />
<br />
<b>COPYRIGHT</b><br />
<br />
You acknowledge that the Site contains information, data, software, photographs, graphs, typefaces, graphics and other material (collectively "Content") that are protected by copyrights, trademarks, trade secrets, rights in databases and/or other proprietary rights, and that these rights are valid and protected in all forms, media and technologies existing now or hereinafter developed. All Content is copyrighted as a collective work under the Sri Lanka copyright laws, and we own a copyright and/or database right in the selection, coordination, arrangement, presentment and enhancement of such Content. You may not modify, remove, delete, augment, add to, publish, transmit, participate in the transfer or sale of, create derivative works from or adaptations of, or in any way exploit any of the Content, in whole or in part. If no specific restrictions are displayed, you may make copies of select portions of the Content, provided that the copies are made only for your personal use and that you maintain any notices contained in the Content, such as all copyright notices, trademark legends, or other proprietary rights notices. Except as provided in the preceding sentence or as permitted by the fair use privilege under the Sri Lanka copyright laws, your legal rights in relation to "fair dealing" under Sri Lankan copyright law, or your legal rights under any other similar copyright law, you may not upload, post, reproduce, or distribute in any way Content protected by copyright, or other proprietary right, without obtaining permission of the owner of the copyright or other propriety right.<br />
<br />
Nothing contained on the Site should be construed as granting, by implication, estoppels, or otherwise, any license or right to use the Site or any information displayed on the Site, through the use of framing, deep linking or otherwise, except: (a) as expressly permitted by these Terms and Conditions; or (b) with our prior written permission or the prior written permission from such third party that may own the trademark or copyright of information displayed on the Site.<br />
<br />
<i>08:55 04.05.2015</i><br />
</p></font></td>
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
    <td height="20px" width="499"><p><font face="Segoe UI">Copyright © 2015 RFabrics.com; All Rights Reserved. <a href="User_Agreement.php">User Agreement</a>, <a href="Privacy.php">Privacy and Cookies</a></font></p></td>
    <td height="20px" width="499">&nbsp;</td>
    <td height="20px" width="%"></td>
  </tr>
</table>
</body>
</html>
