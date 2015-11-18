<?php include 'common/index.php';?>
<?php include 'database/conn.php';?>
<script>
function f1(userCode)
{
	if (confirm("是否确认"))  {  
		location.href='delete.php?userCode='+userCode;
	} 
};
</script>
<?php
//查询语句
$result = mysql_query("SELECT * FROM t_user");
echo '<div class="container"><table class="table table-striped" style="margin-top:10%;">
         <thead><tr><td>First Name</td><td>Last Name</td><td>Age</td><td>操作</td></tr></thead>
         <tbody>';
while($row = mysql_fetch_array($result))
  {
  	echo "<tr><td> $row[FirstName] </td><td> $row[LastName] </td><td> $row[Age] </td><td><a href=\"javascript:f1($row[userCode])\">删除</a></td></tr>";
  }
echo "</tbody></table><div>";
mysql_close($con);
?>

