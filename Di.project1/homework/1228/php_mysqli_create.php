<?php
if (isset($_POST["action"]) && $_POST["action"] == "add") {
    require_once "connDB.php";
    $sql_query = "INSERT INTO `members`(`m_name`,`m_username`,`m_passwd`,`m_sex`,`m_birthday`,`m_level`,`m_Email`,`m_url`,`m_Phone`,`m_address`,`m_login`,`m_logintime`,`m_jointime`) VALUES(";
    $sql_query .= "'{$_POST["m_name"]}',";
    $sql_query .= "'{$_POST["m_username"]}',";
    $sql_query .= "'{$_POST["m_passwd"]}',";
    $sql_query .= "'{$_POST["m_sex"]}',";
    $sql_query .= "'{$_POST["m_birthday"]}',";
    $sql_query .= "'{$_POST["m_level"]}',";
    $sql_query .= "'{$_POST["m_Email"]}',";
    $sql_query .= "'{$_POST["m_url"]}',";
    $sql_query .= "'{$_POST["m_Phone"]}',";
    $sql_query .= "'{$_POST["m_address"]}',";
    $sql_query .= 0; //m_login
    $sql_query .= null; //m_logintime
    $sql_query .= date("Y-m-d H:i:s", strtotime("now")) . ")"; //m_jointime

    echo $sql_query;
    mysqli_query($conn, $sql_query);
    mysqli_close($conn);
    header("location:php_mysqli_read.php");
}
include "view.php";
$create = new views\table\Table;
$create->title = '會員';
$create->sub_title = '建立';
$create->form_action = 'php_mysqli_create.php';
$create->cancel_but = '重新填寫';
$create->log_disabled = 'disabled';
$create->logt_disabled = 'disabled';
$create->jot_disabled = 'disabled';
$create->jot_required = '';

$create->showHtml();