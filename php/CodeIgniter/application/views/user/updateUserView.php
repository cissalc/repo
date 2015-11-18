<form class="form-horizontal" action="updateUser" method="POST"  style="margin-top:10%;">
<?php foreach ( $users as $item ): ?>
<input name="userCode" type="hidden" value="<?php echo "$item[userCode]";?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fisrt Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="firstName" type="text" value="<?php echo "$item[FirstName]";?>" class="form-control" id="inputEmail3" placeholder="Fisrt Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="lastName" type="text" value="<?php echo "$item[LastName]";?>" class="form-control" id="inputPassword3" placeholder="Last Name">
    </div>
  </div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Age :</label>
    <div class="col-sm-10" style="width:8%">
      <input name="age" type="text" value="<?php echo "$item[Age]";?>" class="form-control" id="inputPassword3" placeholder="Age">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">更新</button>
    </div>
  </div>
  <?php endforeach; ?>
</form>";

