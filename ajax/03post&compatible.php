<?php
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$sucess = [0 => 'ok', 1 => 'NG', 2 => 'db connect fail'];

header("content-type:text/html; charset=utf-8");
date_default_timezone_set("Asia/Taipei");

$user = "root";
$password = "";
$host = "localhost:3306";
$db = "class";
$port = "3306";

//$conn = mysqli_connect($host, $user, $password, $db, $port);
$conn = mysqli_connect($host, $user, $password);
if ($conn) {
    //選擇資料庫
    mysqli_select_db($conn, $db);
    //設置資料庫編碼方式
    mysqli_query($conn, 'set names utf8');
    mysqli_set_charset($conn, "utf8");
} else {
    echo $sucess(2);
}

// echo json_encode($uname);
echo json_encode($uname);
echo json_encode($upass);