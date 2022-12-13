
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add user Success or Fail</title>
</head>

<body>
<?php
require("connect_db.php");

    $sid = $_POST["sid"];
	$pw = $_POST["pw"];

    $sql = "SELECT sid FROM userinfo WHERE BINARY sid = '$sid'";
	$sql2 = "SELECT pw FROM userinfo WHERE BINARY pw = '$pw'";
	
    $result = mysqli_query($conn, $sql);
	$result2 = mysqli_query($conn, $sql2);
	
	$row=mysqli_num_rows($result);
	$row2=mysqli_num_rows($result2);
	
    if ($row) {
	    if ($row2) {
			    setcookie("project", $sid, time() + 90000);
				echo "<script>alert('Login success! Now will return to home page');location.href ='mainmenu.php?$sid'</script>";			
            } else {
			    echo '<script>alert("Password incorrect, Please enter correct password"); location.href ="loginpage.php"</script>';
            }	
    } else {
	    echo '<script>alert("SID is not exists, Please go to register "); location.href ="loginpage.php"</script>';
    }
?>
</body>
</html>