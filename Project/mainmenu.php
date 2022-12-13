<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main menu</title>
</head>
<style>
p 
{
  margin: 30px 70px;
}
h1 
{
  text-align: center;
  margin: 30px 70px;
}
</style>

<body>
  <?php
  if (isset($_COOKIE["project"])) {
    echo'<h3 align="right"><a href="logoutpage.php">Logout</a></h3>';
  } else {
    echo'<h3 align="right"><a href="loginpage.php">Login</a> | <a href="registryform.php">Registry</a></h3>';
  }
  ?>
  <h1><strong>HSU something
  </strong></h1>
  <p>Select function:</p>
  <p><a href="add_food_form.php">Funmction1 (no)</a></p>
  <p><a href="view_food.php">Function2 (no)</a></p>
</body>
</html>