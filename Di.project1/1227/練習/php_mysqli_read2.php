<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  table,
  td {
    border-collapse: collapse;
  }

  tr,
  h1 {
    text-align: center;

  }

  h1 {
    color: green;
  }
  </style>
</head>

<body>
  <h1 align='center'>學生資料管理系統</h1>
  <p>
  <table align=center border=1>
    <tr>
      <th>座號</th>
      <th>姓名</th>
      <th>性別</th>
      <th>生日</th>
      <th>電子郵件</th>
      <th>電話</th>
      <th>地址</th>
      <th>身高</th>
      <th>體重</th>
    </tr>
    <tr align=center>

      <!-- 資料內容-->
      <?php
require_once "connDB.php";

$sql = "SELECT * FROM `students`";
$result = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "
      <tr >
      <td>{$row['cID']}</td>
      <td>{$row['cName']}</td>
      <td>{$row['cSex']}</td>
      <td>{$row['cBirthday']}</td>
      <td>{$row['cEmail']}</td>
      <td>{$row['cPhone']}</td>
      <td>{$row['cAddr']}</td>
      <td>{$row['cHeight']}</td>
      <td>{$row['cWeight']}</td>
    </tr>";
}
mysqli_free_result($result);
mysqli_close($connect);
?>
  </table>
  </p>
</body>

</html>