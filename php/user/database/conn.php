<?php
 header("Content-Type:text/html;   charset=utf-8"); 
/* $con  =  mysql_connect ( "rds52sv2id860gox5m2g.mysql.rds.aliyuncs.com" ,  "rha4d0e6orf44k43" ,  "ABCabc123" );
 $db =  mysql_select_db ( "rds52sv2id860gox5m2gAAA", $con);*/
 
  $con  =  mysql_connect ( "localhost" ,  "root" ,  "ABCabc123" );
 $db =  mysql_select_db ( "lxf01", $con);
 
//创建表
$sql = "CREATE TABLE t_user 
		(
		userCode int NOT NULL AUTO_INCREMENT, 
		PRIMARY KEY(userCode),
		FirstName varchar(15),
		LastName varchar(15),
		Age int
		)DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
$result = mysql_query($sql,$con);

?>
