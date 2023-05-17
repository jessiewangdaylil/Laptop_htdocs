<?php
require_once "connDB.php";
$del = $_POST['del'];
print_r($del);
foreach ($del as $value) {
    mysqli_query($connect, "DELETE FROM `students` WHERE `cID`={$value}");
}
mysqli_close($connect);
header("location:php_mysqli_read.php ");