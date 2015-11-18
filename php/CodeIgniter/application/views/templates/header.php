<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>用户管理</title>
      <!-- Bootstrap -->
  <link href="/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
  <script src="/bootstrap-3.3.2/js/bootstrap.min.js"></script>
  <script src="/jquery/jquery-2.1.1.min.js"></script>
</head>
<body>
<?php header("Content-Type:text/html;   charset=utf-8"); ?>
<div class="container">
	<ul class="nav nav-pills">
	  <li role="presentation" class="active"><a href="index">用户管理</a></li>
	</ul>
		
	<div class="btn-group" role="group" aria-label="...">
	  <button type="button" class="btn btn-default" onclick="location.href='listUser'">用户列表</button>
	  <button type="button" class="btn btn-default" onclick="location.href='addUserView'">新增用户</button>
	  <button type="button" class="btn btn-default" onclick="location.href='deleteUserView'">删除用户</button>
	  <button type="button" class="btn btn-default" onclick="location.href='updateUserListView'">更新用户</button>
	</div>
