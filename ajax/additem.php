<?php
	if(isset($_POST['item_type']) && isset($_POST['item_name']))
	{
		include("db_connection.php");
	
		$item_type = $_POST['item_type'];
		$item_name = $_POST['item_name'];

		$query = "INSERT INTO worship(item_type, item_name) VALUES('$item_type', '$item_name')";
		if (!$result = mysql_query($query)) {
	        exit(mysql_error());
	    }
	    echo "新增了一筆資料!";
	}
?>