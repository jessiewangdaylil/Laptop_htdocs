<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1207_ex2</title>
</head>

<body>
  <form name="form1" action="ex_2.php" method="get">
    請輸入<br>
    寬度<input name="width" type="number" style="width:50px; "><br>
    高度<input name="high" type="number" style="width:50px; "><br>
    <input value="重置" type="reset">
    <input value="送出" type="submit"><br>
  </form>
</body>

</html>


<?php
  if(isset($_GET['width']) && isset($_GET['high']) && !empty($_GET['width'])&& !empty($_GET['high']) )
  {
    $width = $_GET['width'];
    $high = $_GET['high'];
    F($width,$high);
  }
  function F($w,$h)
    {
      for ($i = 0 ; $i < $h ; $i++)
      {
        for ($j = 0 ; $j < $w ; $j++)
        {
          echo ($i+1)*($j+1)."\t";

        }
          echo "<br>";
      }

    }
?>