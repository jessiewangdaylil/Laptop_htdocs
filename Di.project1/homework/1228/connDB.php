<?php
header("contect-type:text/html;charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "";
$host = "localhost:3306";
$db = "d.member";

$conn = mysqli_connect($host, $user, $password);

if ($conn) {
    mysqli_select_db($conn, $db);
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, 'utf8');
    // echo "資料庫連線成功";
} else {
    echo "資料庫連線失敗";
}