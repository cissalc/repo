<?php
 header("Content-Type:text/html;   charset=utf-8"); 
/* $con  =  mysql_connect ( "rds52sv2id860gox5m2g.mysql.rds.aliyuncs.com" ,  "rha4d0e6orf44k43" ,  "ABCabc123" );
 $db =  mysql_select_db ( "rds52sv2id860gox5m2gAAA", $con);*/
 
  $con  =  mysql_connect ( "localhost" ,  "root" ,  "ABCabc123" );
 $db =  mysql_select_db ( "lxf01", $con);
 
 if($con){
  echo("数据库连接成功");
 }else{
  echo("数据库连接失败");
 }
echo "<br>";

//创建表
$sql = "CREATE TABLE Persons 
		(
		userCode int,
		FirstName varchar(15),
		LastName varchar(15),
		Age int
		)DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
$result = mysql_query($sql,$con);
if($result){
	echo "result:$result";
}

//插入数据
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Peter', 'Griffin', '35')");
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('Glenn', 'Quagmire', '33')");
mysql_query("INSERT INTO Persons (FirstName, LastName, Age) 
VALUES ('刘', '翔飞', '25')");


//查询数据
 $result  =  mysql_query ( "SELECT 'Hello, dear MySQL user!' AS _message FROM DUAL" );
 $row  =  mysql_fetch_assoc ( $result );
echo  htmlentities ( $row [ '_message' ]);

//查询语句
$result = mysql_query("SELECT * FROM Persons");
while($row = mysql_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName'];
  echo "<br />";
  }
  
mysql_close($con);
?>
