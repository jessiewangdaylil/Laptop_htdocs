<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form name="form1" action="function.php" method="get" align="le">
    請選擇用餐時段<select name="eatMoment">
      <option value="早餐">早餐</option>
      <!--keyboard 中打option*4-->
      <option value="午餐">午餐</option>
      <option value="晚餐">晚餐</option>
      <!--shift +alt+向下鍵 copy功能-->
      <!--input:checkbox-->
    </select><br>
    請填選您選擇的食物:<input type="text" name="food"><br>


    <input type="reset" value="取消"><input type="submit" value="送出">
  </form>
</body>

</html>