<table class="table table-striped">
 <thead>
	<tr><td>First Name</td><td>Last Name</td><td>Age</td></tr>
 </thead>
 <tbody>
   <?php foreach ($users as $item): ?>
		<tr><td> <?php echo "$item[FirstName]";?> </td><td> <?php echo "$item[LastName]";?> </td><td> <?php echo "$item[Age]";?> </td></tr>
   <?php endforeach; ?>  
  </tbody>
</table>
