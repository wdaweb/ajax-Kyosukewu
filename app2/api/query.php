<?php
include_once "../base.php";
//處理查詢資料的請求
$rows=$Stu->all();
foreach($rows as $row){
    echo "<tr>";
    echo "<td>{$row['id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['classes']}</td>";
    echo "<td>{$row['num']}</td>";
    echo "<td>{$row['score']}</td>";
    echo "</tr>";
}

?>