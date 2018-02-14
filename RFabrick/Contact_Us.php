<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>

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
</script>

</head>

<body>
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
    <td width="191" rowspan="3"><a href="Home.html"><img src="Images/Logo.png" width="180" height="70" /></a></td>
    <td width="573">&nbsp;</td>
    <td width="126">&nbsp;</td>
  </tr>
  <tr>
    <td height="34" bgcolor="#FFFFFF"><input name="Search" placeholder="Search..." type="text" class="resizedTextbox2" id="SearchFiledID"/></td>
    <td width="126"><input type="image" src="Images/Search.png" onclick="validateSearch()" /></td>
    <td width="92"><font color="#6E6E6E" face="Segoe UI"><center>
      <font color="#6E6E6E" face="Segoe UI"><font color="#6E6E6E" face="Segoe UI"><i><a href="Advanced_Search.html">Advanced</a></i></font><i><a href="Compare.html"></a></i></font>
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
    <td height="10px"><font color="#848484"  size="2" face="Segoe UI"><i>You are in Here : Contact Us</i></font></td>
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
    <td width="495" rowspan="5" bgcolor="#FFFFFF"><form action="PHPpages/mail.php" method="POST"/><table width="490" border="0">
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td width="141"><font color="#6E6E6E" face="Segoe UI"><div align="right">Name</div></font></td>
        <td colspan="2"><input width="325px" type="text" id="Namefieldid" class="resizedTextbox10" name="name"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Email</div></font></td>
        <td colspan="2"><input width="325px" type="text" id="eMailfieldID" class="resizedTextbox10" name="email"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Phone</div></font></td>
        <td colspan="2"><input width="325px" type="text" id="TelephoneFieldID"" class="resizedTextbox10" name="phone"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Request Phone Call:</div></font></td>
        <td colspan="2"><font color="#6E6E6E" face="Segoe UI">Yes:</font><input type="checkbox" value="Yes" name="call"><font color="#6E6E6E" face="Segoe UI">No:</font><input type="checkbox" value="No" name="call"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Website</div></font></td>
        <td colspan="2"><input type="text" class="resizedTextbox10" name="website"></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Priority</div></font></td>
        <td colspan="2"><span class="custom-dropdown custom-dropdown--white2"><select name="priority" class="custom-dropdown__select custom-dropdown__select--white2" size="1">
<option value="Low">Low</option>
<option value="Normal">Normal</option>
<option value="High">High</option>
<option value="Emergency">Emergency</option>
</select></span></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Type</div></font></td>
        <td colspan="2"><span class="custom-dropdown custom-dropdown--white2"><select name="type" class="custom-dropdown__select custom-dropdown__select--white2" size="1">
<option value="update">Website Update</option>
<option value="change">Information Change</option>
<option value="addition">Information Addition</option>
<option value="new">New Products</option>
</select></span></td>
      </tr>
      <tr>
        <td colspan="3"></td>
      </tr>
      <tr>
        <td><font color="#6E6E6E" face="Segoe UI"><div align="right">Message</div></font></td>
        <td colspan="2"><textarea name="message" id="MessageFieldID" class="resizedTextbox3"  rows="6" cols="25"></textarea></td>
      </tr>
      <tr>
        <td></td>
        <td width="102"><input type="submit" style="border-style:hidden;height:100%;background:#5882fa;width:100px;height:25px;color:#FFF"" onclick="validate()" value="Submit" text="Submit"></td>
        <td width="233"><input type="reset" style="border-style:hidden;height:100%;background:#5882fa;width:100px;height:25px;color:#FFF"" value="Clear"></td>
      </tr>
    </table></form></td>
    <td width="%" rowspan="5"></td>
  </tr>
  <tr>
    <td width="99" height="250"></td>
    <td height="250"  width="300"colspan="2"><img src="Images/Banner 300x250.jpg" width="300" height="250" /></td>
    <td width="99" height="250"></td>
  </tr>
  <tr>
    <td width="99" height="2"></td>
    <td height="2" colspan="2"></td>
    <td width="99" height="2"></td>
  </tr>
  <tr>
    <td width="99" height="150"></td>
    <td width="150" height="150"><img src="Images/Banner 150x150.jpg" width="146" height="150" /></td>
    <td width="150" height="150"><img src="Images/Banner 150x150.jpg" width="146" height="150" /></td>
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
    <td height="20px" width="499"><p><font face="Segoe UI">Copyright © 2015 RFabrics.com; All Rights Reserved. User Agreement, Privacy and Cookies</font></p></td>
    <td height="20px" width="499">&nbsp;</td>
    <td height="20px" width="%"></td>
  </tr>
</table>
</body>
</html>
