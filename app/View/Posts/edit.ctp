<h2>Edit Post</h2>

<div class="upper-right-opt">
	<?php echo $this->Html->link('List Posts', array('action' => 'index')); ?>
</div>
<?php  
echo $this->Form->create('Post');
	echo $this->Form->input('title');
	echo $this->Form->input('body', array('rows' => '3'));
	echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Update');
?>