<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207_ex3</title>
</head>

<body>
  <form name="form1" action="ex_3.php" method="get">
    請輸入<br>
    身高<input name="high" type="number" style="width:50px; "><br>
    體重<input name="weigh" type="number" style="width:50px; "><br>
    <input value="重置" type="reset">
    <input value="送出" type="submit"><br>
  </form>
</body>

</html>


<?php
  if(isset($_GET['weigh']) && isset($_GET['high']) && !empty($_GET['weigh'])&& !empty($_GET['high']) )
  {
    $weigh = $_GET['weigh'];
    $high = $_GET['high'];
    $bc = bodyConver($weigh,$high);
    echo $weigh."kg= ".round($bc[0],2)." lb"."<br>".$high."cm= ".round($bc[1],2)." in"."<br>";
  }
  function kgTOlb($w)
    {
      $lb = $w/0.454;
      return $lb;
    }
  function cmTOin($h)
    {
      $in = $h/2.54;
      return $in;
    }
  function bodyConver($w,$h)
  {
     return [kgTOlb($w),cmTOin($h)];
  }
?>