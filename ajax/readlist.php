<?php
    include("db_connection.php");

    $data = '<table class="table table-bordered table-striped">
                        <tr>
                            <th>No.</th>
                            <th>快/慢</th>
                            <th>歌名</th>
                            <th>操作</th>
                        </tr>';
 
    $query = "SELECT * FROM worship";
 
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    if(mysqli_num_rows($result) > 0)
    {
        $number = 1;
        while($row = mysqli_fetch_assoc($result))
        {
            $data .= '<tr>
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

        $data .= '<tr><td colspan="4">目前沒資料! 快新增一個吧!</td></tr>';
    }
 
    $data .= '</table>';
 
    echo $data;
?>