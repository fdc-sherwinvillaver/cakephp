<div class="upper-right-opt">
	<?php echo $this->Html->link('Add Post',array('action' => 'add')); ?>
</div>
<table>
<tr>
	<th>ID</th>
	<th>Title</th>
	<th>Body</th>
	<th>Actions</th>
</tr>
<?php  foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']['id']; ?></td>
		<td><?php echo $post['Post']['title']; ?></td>
		<td><?php echo $post['Post']['body']; ?></td>
		<td><?php echo $this->Html->link('Edit',array('action' => 'edit',$post['Post']['id']))."||".$this->Html->link('Delete',array('action' => 'delete',$post['Post']['id']),array('confirm' => 'Are you sure?')); ?></td>
	</tr>
<?php endforeach; ?>
</table>