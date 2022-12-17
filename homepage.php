<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>Home page</title>
<style>
#p1
{
  text-align: right;
  margin-top: 0px;
  margin-bottom: 0px;
  margin-right: 30px;
  margin-left: 0px;
}

#p2
{
  margin-top: 30px;
  margin-bottom: 0px;
  margin-right: 00px;
  margin-left: 70px;
  font-size: 25;
}

#p3
{
  text-align:center;
  font-size: 50;
}

#p4
{
  margin-top: 30px;
  margin-bottom: 0px;
  margin-right: 00px;
  margin-left: 70px;
  font-size: 35;
}
</style>

<body>
  <?php
  if (isset($_COOKIE["project"])) {
    echo'<h3 id="p1"><a href="logout.php">Logout</a></h3>';
  } else {
    echo'<h3 id="p1"><a href="loginpage.php">Login</a> | <a href="registryform.php">Registry</a></h3>';
  }
  ?>
  <h1 id="p3"><strong>HSU something</strong></h1>
  <p id="p4">Select function:</p>
  <?php
  if(isset($_COOKIE["project"])){
     echo'<p id="p2"><a href="project.xml">XML</a></p>';
  }
  ?>
  <p id="p2"><a href="add_food_form.php">Function1 (no)</a></p>
  <p id="p2"><a href="view_food.php">Function2 (no)</a></p>
</body>
</html>