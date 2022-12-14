<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>

<head>
<title>registerpage</title>
</head>

<body>
<p><a href="mainmenu.php">Home page</a></p>
    <form name="myForm" action="registriedpush.php" method="post" id="form1"> 
    <table width="400" border="3" align="center" style="margin-top:100px" >
    <tr><td colspan="2" align="center"><h3/>Registry Page</td><tr>
    <tr>
        <td width="100">Programme</td>
	    <td width="200"><select name="selectedValue" required />
			<option>-</option>
			<optgroup label="BA">
			    <option value="BA-AD">BA-AD</option>
				<option value="BA-AHCC">BA-AHCC</option>
				<option value="BA-CMCT">BA-CMCT</option>
			</optgroup>
			<optgroup label="BBA">
			    <option value="BBA-BA">BBA-BA</option>
                <option value="BBA-CGC">BBA-CGC</option>
                <option value="BBA-FB">BBA-FB</option>
			</optgroup>
			<optgroup label="BSC">			
			<option value="BSC-AC">BSC-AC</option>
			<option value="BSC-AIN">BSC-AIN</option>
			<option value="BSC-DSBI">BSC-DSBI</option>
			</optgroup>
		</select>
        </td>
    </tr>
    <tr>
        <td width="100">Year of entrance:</td>
		<td width="200"><input type="number" name="entranceyear" id="entranceyear" min="1990" max="2022" step="1" placeholder="YYYY" required /></td>
    </tr>
    <tr>
        <td width="100">Student ID:</td>
        <td width="200"> 
		    <input type="text" name="sid" id="sid" placeholder="s123456" 
			pattern="[s]{1}[0-9]{6}" required />
		</td>
    </tr>
    <tr>
        <td width="100">Password:</td>
        <td width="200"> 
		    <input type="text" name="pw" id="pw" 
			pattern="(?=.*\d)(?=.*[A-Z]).{8,30}" required />
			<p><small>Must contain 8 to 30 characters that are of at least one number and one uppercase letter </small></p>
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