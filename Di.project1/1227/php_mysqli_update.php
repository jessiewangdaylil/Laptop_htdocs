<?php
require_once "connDB.php";
if (isset($_POST["action"]) && $_POST["action"] == "update") {
    $sql_query = " UPDATE `students`SET ";
    $sql_query .= "`cName`='" . $_POST["cName"] . "',";
    $sql_query .= "`cSex`='" . $_POST["cSex"] . "',";
    $sql_query .= "`cBirthday`='" . $_POST["cBirthday"] . "',";
    $sql_query .= "`cEmail`='" . $_POST["cEmail"] . "',";
    $sql_query .= "`cAddr`='" . $_POST["cAddr"] . "',";
    $sql_query .= "`cPhone`='" . $_POST["cPhone"] . "',";
    $sql_query .= "`cHeight`='" . $_POST["cHeight"] . "',";
    $sql_query .= "`cWeight`='" . $_POST["cWeight"] . "'";
    $sql_query .= " WHERE `cID`=" . $_POST["cID"];
    echo $sql_query;
    mysqli_query($connect, $sql_query);
    mysqli_close($connect);
    header("location:php_mysqli_read.php ");

}

$sql_db = "SELECT * FROM `students` WHERE `cID`=" . $_GET["cID"];
$result = mysqli_query($connect, $sql_db);
$row = mysqli_fetch_array($result, MYSQLI_BOTH); // MYSQLI_BOTH  陣列有所引值與欄位名稱
mysqli_free_result($result);
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料管理系統-修改資料</title>
</head>

<body>
  <h1 align='center'>學生資料管理系統 -修改資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="php_mysqli_update.php" method="POST" name="formAdd">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位名稱</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" value="<?=$row["cName"];?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="cSex" value='M' <?php if ($row["cSex"] == "M") {
    echo " checked";
}
?>>男
          <input type="radio" name="cSex" value='F' <?php if ($row["cSex"] == "F") {
    echo " checked";
}
?>>女
          <input type="radio" name="cSex" value='E' <?php if ($row["cSex"] == "E") {
    echo " checked";
}
?>>其他
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" required value="<?php echo $row["cBirthday"]; ?>
"></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="cEmail" required value="<?=$row["cEmail"];?>
"></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="cPhone" required value="<?=$row["cPhone"];?>
"></td>
      </tr>
      <tr>
        <td>地址</td>
        <td><input type="text" name="cAddr" size="40" required value="<?=$row["cAddr"];?>
"></td>
      </tr>
      <tr>
        <td>身高</td>
        <td><input type="number" name="cHeight" size="40" min=30 required value="<?=$row["cHeight"];?>
"></td>
      </tr>
      <tr>
        <td>體重</td>
        <td><input type="number" name="cWeight" size="40" min=10 required value="<?=$row["cWeight"];?>
"></td>
      </tr>
      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="cID" value="<?=$row['cID'];?>">
          <input type="hidden" name="action" value="update">
          <input type="submit" name="sub_button" value="修改資料">
          <input type="reset" name="re_button" value="重新填寫">
        </td>
      </tr>

    </table>


  </form>
</body>

</html>

<?php

?>
