<?php

require_once('../BackEnd/Admin/connect.php');

$sql_nsx = mysqli_query($connect, 'SELECT producer_id, producer_name FROM producer ORDER BY producer_id DESC');

$str = " ";
while ($row_nsx = mysqli_fetch_assoc($sql_nsx)) {
     $str .= "<option value='{$row_nsx['producer_id']}'>{$row_nsx['producer_name']}<option>";
}

echo $str;
