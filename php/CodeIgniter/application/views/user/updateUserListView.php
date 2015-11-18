
<table class="table table-striped" style="margin-top:10%;">
	<thead>
		<tr><td>First Name</td><td>Last Name</td><td>Age</td><td>操作</td></tr>
	</thead>
	<tbody>
		<?php foreach ( $users as $item ): ?>
	    <tr><td> <?php echo "$item[FirstName]";?> </td><td> <?php echo "$item[LastName]";?> </td><td> <?php echo "$item[Age]";?> </td><td><a href="updateUserView?userCode=<?php echo "$item[userCode]";?>">更新</a></td></tr>
	    <?php endforeach; ?>
	</tbody>
</table>
