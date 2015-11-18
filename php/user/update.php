<?php include 'database/conn.php';?>
<?php
$userCode = $_POST[userCode];
$firstName = $_POST[firstName];
$lastName = $_POST[lastName];
$age = $_POST[age];

//插入数据
mysql_query("set names utf8");
mysql_query("update t_user set firstName='$firstName',lastName='$lastName',age=$age where userCode = $userCode");
mysql_close($con);
?>
<?php include 'updateUserList.php';?> 