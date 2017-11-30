<?php
// include Database connection file
include("db_connection.php");
 
// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $item_type = $_POST['item_type'];
    $item_name = $_POST['item_name'];
 
    // Updaste User details
    $query = "UPDATE worship SET item_type = '$item_type', item_name = '$item_name'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}