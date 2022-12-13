<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add user Success or Fail</title>
</head>

<body>
<?php
require("connect_db.php");

    $programme = $_POST["selectedValue"];
    $entranceyear = $_POST["entranceyear"];
    $sid = $_POST["sid"];
	$pw = $_POST["pw"];

    $sql = "SELECT * FROM userinfo WHERE sid = '$sid'";
    $result = mysqli_query($conn, $sql);
	if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo '<script>alert("Student ID exists already");location.href ="registryform.php"</script>';			
        } else {
            $insert_sql = "INSERT INTO userinfo (sid, programme, entranceyear, pw) VALUES ('$sid', '$programme', $entranceyear, '$pw')";
            mysqli_query($conn, $insert_sql);
			echo '<script>alert("registration success! Now will return to login page");location.href ="loginpage.php"</script>';
        }
    } else{
        echo 'Error: ' . mysqli_error();
    }
?>
</body>
</html>