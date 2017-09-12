<h2>User List</h2>
<div class="upper-right-opt">
	<?php echo $this->Html->link('Add User',array('action' => 'add')); ?>
</div>
<table>
	<tr>
		<th>ID</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Middlename</th>
		<th>Action</th>
	</tr>
<?php foreach ($users as $user): ?>
	<tr>
		<td> <?php echo $user['User']['id']; ?> </td>
		<td> <?php echo $user['User']['first_name']; ?> </td>
		<td> <?php echo $user['User']['last_name']; ?> </td>
		<td> <?php echo $user['User']['middle_name']; ?> </td>
		<td> 
		<?php echo $this->Html->link('Edit', array('action' => 'edit',$user['User']['id']))."||".$this->Html->link('Delete', array('action' => 'delete',$user['User']['id']),array('confirm' => 'Are you sure you want to delete this data?')); ?> 
		</td>
	</tr>
<?php endforeach; ?>

</table>