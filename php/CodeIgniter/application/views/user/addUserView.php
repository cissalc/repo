
<div class="container">
<?php echo validation_errors(); ?>
<form class="form-horizontal" action="addUserView" method="post" style="margin-top:100px;">
<input name="userCode" type="hidden" value="$row[userCode]">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Fisrt Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="firstName" type="text" class="form-control" id="inputEmail3" placeholder="Fisrt Name">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Last Name :</label>
    <div class="col-sm-10" style="width:15%">
      <input name="lastName" type="text" class="form-control" id="inputPassword3" placeholder="Last Name">
    </div>
  </div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Age :</label>
    <div class="col-sm-10" style="width:8%">
      <input name="age" type="text" class="form-control" id="inputPassword3" placeholder="age">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">提交</button>
    </div>
  </div>
</form>
</div>


