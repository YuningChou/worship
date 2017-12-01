<?php

$host = "localhost";
$user = "ynchou"; 
$password = "y7u8n0i5n1g2"; 
$database = "ynchou_worship";

$db = mysql_connect($host, $user, $password) or die("連不上欸...");

mysql_query("SET NAMES UTF8");
mysql_select_db($database, $db);

?>