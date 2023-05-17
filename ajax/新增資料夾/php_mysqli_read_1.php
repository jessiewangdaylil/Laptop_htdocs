<?php

echo "
   <style>
     table,td{
        border-collapse: collapse;
     }
   </style>
   <h1 align='center'>學生資料管理系統</h1>
";

require_once("connDB.php");


$sql = "SELECT * FROM `students`";
$result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);

//資料內容呈現
echo "<p><table align=center border=1>";
//資料表頭
echo "<tr>
    <th>座號</th>
    <th>姓名</th>
    <th>性別</th>
    <th>生日</th>
    <th>電子郵件</th>
    <th>電話</th>
    <th>住址</th>
    <th>身高</th>
    <th>體重</th>
</tr>";

//資料內容
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr align=center>";
  echo "<td>" . $row['cID'] . "</td>";
  echo "<td>" . $row['cName'] . "</td>";
  echo "<td>" . $row['cSex'] . "</td>";
  echo "<td>" . $row['cBirthday'] . "</td>";
  echo "<td>" . $row['cEmail'] . "</td>";
  echo "<td>" . $row['cPhone'] . "</td>";
  echo "<td>" . $row['cAddr'] . "</td>";
  echo "<td>" . $row['cHeight'] . "</td>";
  echo "<td>" . $row['cWeight'] . "</td>";
  echo "</tr>";
}

echo "</table></p>";

mysqli_free_result($result);
mysqli_close($conn); //關閉資料庫連接

// while ($row = mysqli_fetch_assoc($result)) {
//   # code...
//   echo "
// {$row['cID']}
// {$row['cName']}
// {$row['cSex']}
// {$row['cBirthday']}
// {$row['cEmail']}
// {$row['cPhone']}
// {$row['cAddr']}
// {$row['cHeight']}
// {$row['cWeight']} </br>
// ";
// }