<?php

if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    include("db_connection.php");
    $item_id = $_POST['id'];
    $query = "DELETE FROM worship WHERE id = '$item_id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}
?>