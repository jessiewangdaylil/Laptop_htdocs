<?php
if (isset($_POST["action"]) && $_POST["action"] == "add") {
    require_once "connDB.php";
    $sql_query = "INSERT INTO `students`(`cName`,`cSex`,`cBirthday`,`cEmail`,`cPhone`,`cAddr`,`cHeight`,`cWeight`) VALUES(";
    $sql_query .= "'" . $_POST["cName"] . "',";
    $sql_query .= "'" . $_POST["cSex"] . "',";
    $sql_query .= "'" . $_POST["cBirthday"] . "',";
    $sql_query .= "'" . $_POST["cEmail"] . "',";
    $sql_query .= "'" . $_POST["cAddr"] . "',";
    $sql_query .= "'" . $_POST["cPhone"] . "',";
    $sql_query .= "'" . $_POST["cHeight"] . "',";
    $sql_query .= "'" . $_POST["cWeight"] . "')";

    mysqli_query($connect, $sql_query);
    mysqli_close($connect);
    header("location:php_mysqli_read.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料管理系統-新增資料</title>
</head>

<body>
  <h1 align='center'>學生資料管理系統 -新增資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="php_mysqli_create.php" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位名稱</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="cSex" value='M' checked>男
          <input type="radio" name="cSex" value='F'>女
          <input type="radio" name="cSex" value='E'>其他
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" required></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="cEmail" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="cPhone" required></td>
      </tr>
      <tr>
        <td>地址</td>
        <td><input type="text" name="cAddr" size="40" required></td>
      </tr>
      <tr>
        <td>身高</td>
        <td><input type="number" name="cHeight" size="40" min=30 required></td>
      </tr>
      <tr>
        <td>體重</td>
        <td><input type="number" name="cWeight" size="40" min=10 required></td>
      </tr>
      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="action" value="add">
          <input type="submit" name="sub_button" value="新增資料">
          <input type="reset" name="re_button" value="重新填寫">
        </td>
      </tr>

    </table>


  </form>
</body>

</html>
