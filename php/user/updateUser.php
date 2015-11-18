<?php include 'common/index.php';?> 
<?php include 'database/conn.php';?>
<?php
//查询语句
$userCode = $_GET[userCode];
$result = mysql_query("SELECT * FROM t_user where userCode =$userCode");
echo '<div class="container" style="margin-top:6%;">';
while($row = mysql_fetch_array($result))
{?>
<form class="form-horizontal" action="update.php" method="POST" >
<input name="userCode" type="hidden" value="<?php echo"$row[userCode]"?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fisrt Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="firstName" type="text" value="<?php echo"$row[FirstName]"?>" class="form-control" id="inputEmail3" placeholder="Fisrt Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="lastName" type="text" value="<?php echo"$row[LastName]"?>" class="form-control" id="inputPassword3" placeholder="Last Name">
    </div>
  </div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Age :</label>
    <div class="col-sm-10" style="width:8%">
      <input name="age" type="text" value="<?php echo"$row[Age]"?>" class="form-control" id="inputPassword3" placeholder="Age">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">更新</button>
    </div>
  </div>
</form>";
<?php
}
mysql_close($con);
?>

