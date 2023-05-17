<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207_ex5</title>
</head>

<body>
  <form name="form1" action="ex_5.php" method="get">
    請輸入正整數<input name="integer" type="number" style="width:50px; "><br>
    <input value="重置" type="reset">
    <input value="送出" type="submit"><br>
  </form>
</body>

</html>


<?php
  if(isset($_GET['integer']) && !empty($_GET['integer'] ))
  {
    $integer = $_GET['integer'];
    decomp($integer);
  }
  function decomp($n)
    {
      $mult_ten = 1;
      $i=0;
      $string = (string)$n;
      while (floor($n/$mult_ten)>0)
      {
       echo $string[$i].' ';
       $i++;
       $mult_ten*=10;
      }



    }

?>