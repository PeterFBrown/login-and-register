<!DOCTYPE html>
<html>
<head>
<html>

<head>
<title>loginpage</title>
</head>

<body>
<p><a href="mainmenu.php">Home page</a></p>
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