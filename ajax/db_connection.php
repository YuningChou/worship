<?php
 
// Connection variables 
$host = "localhost"; // MySQL host name eg. localhost
$user = "ynchou"; // MySQL user. eg. root ( if your on localserver)
$password = "y7u8n0i5n1g2"; // MySQL user password  (if password is not set for your root user then keep it empty )
$database = "ynchou_worship"; // MySQL Database name
 
// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);
 
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 
?>