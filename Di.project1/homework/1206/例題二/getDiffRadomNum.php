<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>取的隨機不重複號碼練習</title>
</head>

<body>
  <form name="form" action="getDiffRadomNum.php" method="get" align="left">
    取的隨機不重複號碼<br>
    &nbsp;請選擇範圍:<br>
    &nbsp;&nbsp;&nbsp;&nbsp;最大值<input type="number" name="max" style='width:50px;'><br>
    &nbsp;&nbsp;&nbsp;&nbsp;最小值<input type="number" name="min" style='width:50px;'><br>
    取得數量:<input type="number" name="amount" style='width:50px;'><br>
    &nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="取消">&nbsp;<input type="submit" value="送出">
  </form>
</body>

</html>





<?php
if (isset($_GET['max']) && isset($_GET['min']) && isset($_GET['amount'])&& !empty($_GET['max']) && !empty($_GET['min']) && !empty($_GET['amount'] ))
{
 if($_GET['max']-$_GET['min']+1 >= $_GET['amount'])
 {
   $arr = [];
   $max = $_GET['max'];
   $min = $_GET['min'];
   $amount = $_GET['amount'];
   $loop = 0;
    while (count($arr)< $amount )
    {
      $temp = rand($min,$max);
      if(!in_array($temp,$arr))
      {
        $arr[$loop] = $temp;
        echo '第'.$loop+1 .'筆:'.$arr[$loop]."<br>";
        $loop++;
      };
    };

  }
  else
  {
    echo '您輸入的取得數量超出範圍';
  };
};


?>