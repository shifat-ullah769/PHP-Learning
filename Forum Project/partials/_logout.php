<?php
session_start();

// echo "logging u out...please wait...";

session_destroy();
header("Location: /PHP-Learning/Forum%20Project/index.php");
?>