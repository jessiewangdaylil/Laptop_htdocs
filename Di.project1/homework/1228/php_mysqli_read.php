<?php
require_once "connDB.php";
$sql = "SELECT * FROM `members`";
$result = mysqli_query($conn, $sql);
$record = mysqli_num_rows($result);
$per_page = 10;
$total_page = ceil($record / $per_page);

//讀取使用者點擊頁號的資訊
if (isset($_GET['page'])) {
    $page = intVal($_GET['page']);
} else {
    $page = 1;
}
$start_num = $per_page * ($page - 1);
//讀取當頁的資料
$sql = "SELECT * FROM `members` LIMIT {$start_num},{$per_page}";
$result = mysqli_query($conn, $sql);

//表單內容
echo "<h1 align='center'>會員資料管理系統</h1>";
echo "<p align='center'>總共 {$record} 筆資料,目前在第 {$page} 頁</p>";
echo "<p align='center'>
<a href='php_mysqli_create.php'>新增會員資料</a>&emsp;</p>";

//資料內容table-欄位
echo "<p><table align=center border=10>";
echo "<tr>
<th>會員編號</th>
<th>姓名</th>
<th>使用者名稱</th>
<th>密碼</th>
<th>性別</th>
<th>生日</th>
<th>使用者身分</th>
<th>電子郵件</th>
<th>個人網頁</th>
<th>電話</th>
<th>地址</th>
<th>登入次數</th>
<th>上次登入時間</th>
<th>加入時間</th>
<th colspan='2'>資料更動</th>
</tr>";
//資料內容-資料
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr align=center>";
    echo " <td>{$row['id']}</td>";
    echo " <td>{$row['m_name']}</td>";
    echo " <td>{$row['m_username']}</td>";
    echo " <td>{$row['m_passwd']}</td>";
    echo " <td>{$row['m_sex']}</td>";
    echo " <td>{$row['m_birthday']}</td>";
    echo " <td>{$row['m_level']}</td>";
    echo " <td>{$row['m_email']}</td>";
    echo " <td>{$row['m_url']}</td>";
    echo " <td>{$row['m_phone']}</td>";
    echo " <td>{$row['m_address']}</td>";
    echo " <td>{$row['m_login']}</td>";
    echo " <td>{$row['m_logintime']}</td>";
    echo " <td>{$row['m_jointime']}</td>";
    echo "<td><a href='php_mysqli_update.php?id={$row["id"]}'>修改</a></td>";
    echo "<td><a href='php_mysqli_delete.php?id={$row["id"]}'>刪除</a></td>";
}
echo "</tr></table></p></form>";
echo "<table align =center><tr><td>";
//頁面選單
echo "<a href='?page=1'>首頁</a>&emsp;";
if ($page > 1) {
    $pervpage = $page - 1;
    echo "<a href='?page=$pervpage'>上一頁</a>&emsp;";
}
if ($page < $total_page) {
    $nextpage = $page + 1;
    echo "<a href='?page=$nextpage'>下一頁</a>&emsp;";
}
echo "<a href ='?page=$total_page'>末頁</a>";
echo "</td></tr></table>";

//關閉資料庫
mysqli_free_result($result);
mysqli_close($conn);