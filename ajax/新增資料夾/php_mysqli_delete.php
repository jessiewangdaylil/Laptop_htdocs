<?php
require_once("connDB.php");

if (isset($_POST["action"]) && $_POST["action"] == "delete") {
  $sql = "DELETE FROM `students` WHERE `cID`={$_POST['cID']}";
  // echo $sql;
  $result = mysqli_query($conn, $sql);
  mysqli_close($conn); //關閉資料庫連接
  header("location: php_mysqli_read.php");
}


$sql = "SELECT * FROM `students` WHERE `cID`=" . $_GET["cID"];
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($result, MYSQLI_BOTH);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>學生資料管理系統</title>
</head>

<body>
  <h1 align='center'>學生資料管理系統 - 刪除資料</h1>
  <p align=center><a href='php_mysqli_read.php'>回主畫面</a></p>
  <form action="" method="POST" name="formAdd" onsubmit="return confirm('\n是否確定要刪除這筆資料?\n刪除後無法恢復喔!\n')">
    <table border="1" align="center" cellpadding=4>
      <tr>
        <th>欄位</th>
        <th>資料</th>
      </tr>
      <tr>
        <td>姓名</td>
        <td><input type="text" name="cName" value="<?= $row["cName"]; ?>" required></td>
      </tr>
      <tr>
        <td>性別</td>
        <td><input type="radio" name="cSex" value='M' <?php if ($row["cSex"] == "M") echo " checked" ?>>男
          <input type="radio" name="cSex" value='F' <?php if ($row["cSex"] == "F") echo " checked" ?>>女
        </td>
      </tr>
      <tr>
        <td>生日</td>
        <td><input type="date" name="cBirthday" value="<?= $row["cBirthday"]; ?>" required></td>
      </tr>
      <tr>
        <td>電子郵件</td>
        <td><input type="email" name="cEmail" value="<?= $row["cEmail"]; ?>" required></td>
      </tr>
      <tr>
        <td>電話</td>
        <td><input type="tel" name="cPhone" value="<?= $row["cPhone"]; ?>" required></td>
      </tr>
      <tr>
        <td>住址</td>
        <td><input type="text" name="cAddr" size="40" value="<?= $row["cAddr"]; ?>" required></td>
      </tr>
      <tr>
        <td>身高</td>
        <td><input type="number" name="cHeight" size="40" value="<?= $row["cHeight"]; ?>" required></td>
      </tr>
      <tr>
        <td>體重</td>
        <td><input type="number" name="cWeight" size="40" value="<?= $row["cWeight"]; ?>" required></td>
      </tr>
      <tr>
        <td colspan=2 align=center>
          <input type="hidden" name="cID" value="<?= $row['cID']; ?>">
          <input type="hidden" name="action" value="delete">
          <input type="submit" name="button" value="刪除這筆資料">
          <input type="reset" name="button2" value="取消">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>