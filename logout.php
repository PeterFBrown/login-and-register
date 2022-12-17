<?php
session_start();
session_destroy();

  setcookie("project", "", 0);

$URL="homepage.php"; 
header("Location: $URL");
?>