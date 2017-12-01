<?php
	include("db_connection.php");

	$data = '<table class="table table-bordered">
						<tr class="table-heading">
							<th>No.</th>
							<th>快/慢</th>
							<th>歌名</th>
							<th>操作</th>
						</tr>';

	$query = "SELECT * FROM worship";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr data-index='.$row['item_name'].'>
				<td>'.$number.'</td>
				<td>'.$row['item_type'].'</td>
				<td>'.$row['item_name'].'</td>
				<td>
					<button onclick="GetItemDetails('.$row['id'].')" class="btn btn-warning">編輯</button>
					<button onclick="DeleteItem('.$row['id'].')" class="btn btn-danger">刪除</button>
				</td>
				
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	$data .= '<tr><td colspan="4">沒資料唷!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>