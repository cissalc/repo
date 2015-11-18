<?php include 'database/conn.php';?>
<?php
	$firstName = $_POST[firstName];
	$lastName = $_POST[lastName];
	$age = $_POST[age];
	
	//插入数据
	mysql_query("set names utf8");
	mysql_query("INSERT INTO t_user (firstName, lastName, age) 
	VALUES ('$firstName', '$lastName', '$age')");
	
	mysql_close($con);
?>
<?php include 'success.php';?> 
