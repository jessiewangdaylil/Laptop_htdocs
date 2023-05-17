<?php
//取得前台資料
$a = $_GET["eatMoment"]; //$_GET[接收前台的哪個變數名稱]
$b = $_GET["food"];

function eat ($a,$b){
  echo "今天".$a."吃".$b."<br>";
}
eat($a,$b);

?>