<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>

<head>
<title>loginpage</title>
</head>

<body>
<p><a href="mainmenu.php">Main menu</a></p>
    <form name="myForm" action="loginverificationpage.php" method="post" id="form2"> 
    <table width="400" border="3" align="center" style="margin-top:100px" >
    <tr><td colspan="2" align="center"><h3/>Login Page</td><tr>
    <tr>
        <td width="100">Student ID:</td>
        <td width="200"> 
		    <input type="text" name="sid" id="sid" placeholder="s123456" required />
		</td>
    </tr>
    <tr>
        <td width="100">Password:</td>
        <td width="200"> 
		    <input type="text" name="pw" id="pw" required />
		</td>
    </tr>	
	<tr>
        <td colspan="2" align="center">
		<input name="submit" type="submit" value="submit"/>
		<input type="reset" value="Reset"/></td>
    </tr>	
</table>
</form>
</body>

</html>