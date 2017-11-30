<?php
    if(isset($_POST['item_type']) && isset($_POST['item_name']) )
    {       
        include("db_connection.php");
        $item_type = $_POST['item_type'];
        $item_name = $_POST['item_name'];
 
        $query = "INSERT INTO worship(item_type, item_name ) VALUES('$item_type', '$item_name')";
        if (!$result = mysqli_query($con, $query)) {
            exit(mysqli_error($con));
        }
        echo "增加了一筆資料";
    }
?>