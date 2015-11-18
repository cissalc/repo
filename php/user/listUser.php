<?php include 'common/index.php';?> 
<?php include 'database/conn.php';?>
<?php
//查询语句
$result = mysql_query("SELECT * FROM t_user");
echo '<div class="container"><table class="table table-striped" style="margin-top:10%;">
         <thead><tr><td>First Name</td><td>Last Name</td><td>Age</td></tr></thead>
         <tbody>';
while($row = mysql_fetch_array($result))
  {
  	echo "<tr><td> $row[FirstName] </td><td> $row[LastName] </td><td> $row[Age] </td></tr>";
  }
echo "</tbody></table><div>";
mysql_close($con);
?>
