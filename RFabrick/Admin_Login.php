<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>

<style type="text/css">
body {
	background-color: #FAFAFA;
}
</style>

<link rel="stylesheet" type="text/css" href="Home.css">

<script type="text/javascript">
function validate()
{
	if(validateName() && validatePassword())
	{
		/*var email = document.getElementById("Namefieldid").value;
		if(email=='admin@rfabrics.com')
		{
			window.location.href = "Administrator_Dashboard.html";
		}
		else if(email=='stockkeeper@rfabrics.com')
		{
			window.location.href = "Stock-keeper_Dashboard.html";
		}
		*/
		
		var xamlhttp = new XMLHttpRequest();
		xamlhttp.open("GET","PHPpages/LogInAdministrator.php?userName="+document.getElementById("Namefieldid").value+"&password="+document.getElementById("Passwordfieldid").value,false);
		xamlhttp.send(null);
				
		window.event.returnValue=true;	
	}
	else
		window.event.returnValue=false;
}
function validateName()
{
	var email = document.getElementById("Namefieldid").value;
	var ap=email.indexOf("@");
	var dp=email.indexOf(".");
	if((ap>1)&&(dp-ap>1)&&(email.length-1>dp))
	{
		return true;	
	}
	else
	{
		alert("Enter an email");
		return false;
	}
}
function validatePassword()
{
	var password = document.getElementById("Passwordfieldid").value;
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
<table width="420px" bgcolor="#FFFFFF" height="300px" class="tblea"  border="0" align="center">
  <tr>
    <td><table width="400" bgcolor="#FFFFFF" border="0" align="center">
    <form id="form1" name="form1" method="Get" action="Administrator_Dashboard.php">
  <tr>
    <td colspan="3"><div align="center"><img src="Images/Logo.png" width="180" height="70" /></div></td>
  </tr>
  <tr>
    <td width="80"><font color="#6E6E6E" face="Segoe UI">
    <div align="right">User Name</div></font></td>
    <td colspan="2"><input type="text" id="Namefieldid" class="resizedTextbox4"  /></td>
  </tr>
  <tr>
    <td width="80"><font color="#6E6E6E" face="Segoe UI"><div align="right">Password</div></font></td>
    <td colspan="2"><input type="password" id="Passwordfieldid" class="resizedTextbox4" /></td>
  </tr>
  <tr>
    <td width="80">&nbsp;</td>
    <td width="233">&nbsp;</td>
    <td width="73"><input type="image" src="Images/SignIN.png" onclick="validate()" /></td>
  </tr>
  </form>
</table></td>
  </tr>
</table>

<p>&nbsp;</p>
</body>
</html>
