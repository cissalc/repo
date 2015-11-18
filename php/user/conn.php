<?php
 header("Content-Type:text/html;   charset=utf-8");
 $con  =  mysql_connect ( "rds52sv2id860gox5m2g.mysql.rds.aliyuncs.com" ,  "rha4d0e6orf44k43" ,  "ABCabc123" );
 if($con == false){
 	echo '数据库连接失败';
 }else{
 	echo '数据库连接成功';
 }
 $db =  mysql_select_db ( "rha4d0e6orf44k43", $con);
 
   echo "A";
$result = mysql_query("SELECT * FROM p_user");
while($row = mysql_fetch_array($result))
  {
  	  echo "C";
	  echo $row['FirstName'] . " " . $row['LastName'];
	  echo "<br />";
  }
  echo "B";

?>
