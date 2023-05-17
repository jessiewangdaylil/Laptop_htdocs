<?php
header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "";
$host = "localhost";
$db = "class";
$port = "3306";

//資料庫連線(方法一)
// $connect = mysqli_connect($host, $user, $password, $db, $port);

//資料庫連線(方法二)
$host = "localhost:3306";
$connect = mysqli_connect($host, $user, $password);
if ($connect) {
    //選擇資料庫
    mysqli_select_db($connect, $db);
    //設置編碼
    mysqli_query($connect, 'set names utf8');
    mysqli_set_charset($connect, "utf8");
} else {
    echo "資料庫連線失敗";

}
