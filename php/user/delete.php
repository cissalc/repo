<?php include 'database/conn.php';?>
<?php
$userCode = $_GET[userCode];

//插入数据
mysql_query("set names utf8");
mysql_query("delete from t_user where userCode = $userCode");
mysql_close($con);
?>
<?php include 'deleteUser.php';?> 