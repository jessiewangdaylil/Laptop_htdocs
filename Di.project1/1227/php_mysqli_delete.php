<?php
require_once "connDB.php";
if (isset($_POST["action"]) && $_POST["action"] == "delete") {

    $sql = " DELETE FROM `students`WHERE `cID`={$_POST["cID"]}";
    echo $sql;
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    header("location:php_mysqli_read.php ");

}
//取出資料庫的單筆資料至表單顯示
$sql = "SELECT * FROM `students` WHERE `cID`=" . $_GET["cID"];
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料管理系統-刪除資料</title>
</head>

<body>
  <h1 align='center'>學生資料管理系統 -刪除資料</h1>
  <p align='center'><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="php_mysqli_delete.php" method="POST" name="formAdd"
    onsubmit="return confirm('\n是否要刪除這筆資料?\n刪除後將無法恢復!\n')">
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
          <input type="hidden" name="action" value="delete">
          <input type="submit" name="sub_button" value="刪除資料">
          <input type="reset" name="re_button" value="取消動作">
        </td>
      </tr>

    </table>


  </form>
</body>

</html>

<?php

?>
