<%@ page language="java" contentType="text/html; charset=utf-8" pageEncoding="utf-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core"%>
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
 <link href="/bootstrap-3.3.2/css/bootstrap.min.css" rel="stylesheet"/>
 <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js" /></script>
 <script src="/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<title>用户管理</title>
<script>
function f1(userId)
{
	if (confirm("是否确认"))  {  
		location.href="/user/delete?userId="+userId;
	} 
};
</script>
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
	<table class="table table-striped" style="margin-top:10%;">
	 <thead>
		<tr><td>账号</td><td>姓名</td><td>部门</td><td>岗位</td><td>手机号码</td><td>邮箱</td><td>操作</td></tr>
	 </thead>
	 <tbody>
	   <c:forEach items="${userPage.list}" var="user">
			<tr><td>${user.userId}</td><td>${user.userName}</td><td>${user.deptName}</td><td>${user.posName}</td><td>${user.mobilePhone }</td><td>${user.email }</td><td><a href="/user/editView?userId=${user.userId }">修改</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:f1('${user.userId}')">删除</a></td></tr>
	   </c:forEach>
	  </tbody>
	</table>
	<c:set var="currentPage" value="${userPage.pageNumber}" />
	<c:set var="totalPage" value="${userPage.totalPage}" />
	<c:set var="actionUrl" value="/user/" />
	<c:set var="urlParas" value="" />
	<%@ include file="/common/_paginate.jsp"%>
	
		<div style="min-height:90%;"></div>
    <em>&copy; 2015</em>
    </div>
    </body>
</html>
