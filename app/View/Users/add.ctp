<h2>Add User</h2>
<div class="upper-right-opt">
	<?php echo $this->Html->link('List Users',array('action' => 'index')); ?>
</div>
<?php  
	echo $this->Form->create('User');
	echo $this->Form->input('first_name');
	echo $this->Form->input('last_name');
	echo $this->Form->input('middle_name');
	echo $this->Form->end('Save');
?>