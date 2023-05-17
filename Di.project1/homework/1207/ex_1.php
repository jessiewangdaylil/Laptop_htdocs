<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207_ex1</title>
</head>

<body>
  <form name="form1" action=ex_1.php method="get" align="left">
    請輸入字元:<input type="text" name="char1" style='width:50px;'><br>
    正方形邊長:<input type="number" name="side_length" style='width:50px;'><br>
    <input type="reset" value="重置">
    <input type="submit" value="送出">
  </form>

</body>

</html>


<?php

  if (isset($_GET['char1']) && isset($_GET['side_length']) && !empty($_GET['char1']) && !empty($_GET['side_length']))
    {
      $char = $_GET['char1'][0];
      $side_length = abs($_GET['side_length']);
      square($side_length,$char);
    }
  function square($n,$c)
  {
    for ($i = 0 ; $i < $n ; $i++)
    {
      for ($j = 0 ; $j < $n ; $j++)
      {
        echo $c;
      }
        echo "<br>";
    }
  }

?>