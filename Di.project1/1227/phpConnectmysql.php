<?php
//告訴瀏覽器這頁面是 UTF-8 編碼
header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

//創建db連接
//php操作資料庫第一步
$user = "root";
$password = "";
$host = "localhost:3306";
$db = "class";

$connect = mysqli_connect($host, $user, $password, $db);
//a.確認連線成功
if ($connect) {
    //b.判斷是否連接
    //c.設置編碼
    mysqli_query($connect, 'set names utf8');
    mysqli_set_charset($connect, "utf8");
    //d.創建 sql 子句
    $sql = "SELECT * FROM`students` where 1";
    //e.執行該sql 子句，得到結果

    $result = mysqli_query($connect, $sql);
    // printf($result);
    //判斷是否有資料筆數
    if (mysqli_num_rows($result) > 0) {
        $info = [];
        //通過 fetch_assoc() "拜訪方法"，獲取 $refult 中的每一筆資料
        for ($i = 0; $row = $result->fetch_assoc(); $i++) {
            $info[] = $row;
        }
        //h.以 json資料型態返回
        echo json_encode($info);

    }
} else {

}
