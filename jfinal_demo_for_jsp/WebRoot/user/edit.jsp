<%@ page language="java" contentType="text/html; charset=utf-8" pageEncoding="utf-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link href="/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
 <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js" /></script>
 <script src="/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<title>用户管理</title>
</head>
<body>
<div class="container">
	<ul class="nav nav-pills">
	  <li role="presentation" class="active"><a href="/user">用户管理</a></li>
	</ul>
		
	<div class="btn-group" role="group" aria-label="...">
	  <button type="button" class="btn btn-default" onclick="location.href='/user'">用户列表</button>
	  <button type="button" class="btn btn-default" onclick="location.href='/user/editView'">新增用户</button>
	  <button type="button" class="btn btn-default" onclick="location.href='/user'">删除用户</button>
	  <button type="button" class="btn btn-default" onclick="location.href='/user'">更新用户</button>
	</div>
	
	
	<form class="form-horizontal" action="${url}" method="POST"  style="margin-top:10%;">
		<input name="userCode" type="hidden" value="${user.userId}">
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">账号 :</label>
		    <div class="col-sm-10" style="width:15%">
		      <input name="user.userId" <c:if test="${url=='updateUser'}">readonly="readonly"</c:if>  type="text" value="${user.userId}" class="form-control" id="inputEmail3" placeholder="账号">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputEmail3" class="col-sm-2 control-label">姓名 :</label>
		    <div class="col-sm-10" style="width:15%">
		      <input name="user.userName" type="text" value="${user.userName}" class="form-control" id="inputEmail3" placeholder="姓名">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">部门 :</label>
		    <div class="col-sm-10" style="width:25%">
		      <input name="user.deptName" type="text" value="${user.deptName}" class="form-control" id="inputPassword3" placeholder="部门">
		    </div>
		  </div>
		<div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">岗位 :</label>
		    <div class="col-sm-10" style="width:25%">
		      <input name="user.posName" type="text" value="${user.posName}" class="form-control" id="inputPassword3" placeholder="岗位">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">手机号码 :</label>
		    <div class="col-sm-10" style="width:25%">
		      <input name="user.mobilePhone" type="text" value="${user.mobilePhone}" class="form-control" id="inputPassword3" placeholder="手机号码">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword3" class="col-sm-2 control-label">邮箱 :</label>
		    <div class="col-sm-10" style="width:25%">
		      <input name="user.email" type="text" value="${user.email}" class="form-control" id="inputPassword3" placeholder="邮箱">
		    </div>
		  </div>
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-default">更新</button><span style="color:red;">${msg }</span>
		    </div>
		  </div>
	</form>

	
		<div style="min-height:90%;"></div>
    <em>&copy; 2015</em>
    </div>
    </body>
</html>
