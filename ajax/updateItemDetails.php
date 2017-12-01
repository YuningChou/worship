<?php
include("db_connection.php");

if(isset($_POST))
{
    $id = $_POST['id'];
    $item_type = $_POST['item_type'];
    $item_name = $_POST['item_name'];
 
    $query = "UPDATE worship SET item_type = '$item_type', item_name = '$item_name' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}