<script>
function f1(userCode)
{
	if (confirm("是否确认"))  {  
		location.href="deleteUser?userCode="+userCode;
	} 
};
</script>
<table class="table table-striped">
  <thead><tr><td>First Name</td><td>Last Name</td><td>Age</td><td>操作</td></tr></thead>
    <tbody>
	  <?php foreach ( $users as $item ):?>
	  <tr><td><?php echo "$item[FirstName]";?></td>
	    <td><?php  echo "$item[LastName]" ;?></td>
	    <td><?php  echo "$item[Age]" ;?></td>
	    <td><a href="javascript:f1('<?php echo "$item[userCode]";?>')">删除</a></td>
	  </tr>
	  <?php endforeach; ?>  
    </tbody>
</table>