<?php
session_start();
session_destroy();

  setcookie("project", "", 0);

$URL="mainmenu.php"; 
header("Location: $URL");
?>