<?php
$host = "localhost"; 
$user = "ynchou"; 
$password = "y7u8n0i5n1g2"; 
$database = "ynchou_worship"; 
 
$con = new mysqli($host, $user, $password, $database);
 
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 
?>