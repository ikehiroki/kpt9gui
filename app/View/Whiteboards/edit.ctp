<div class="whiteboards form">
<?php echo $this->Form->create('Whiteboard'); ?>
	<fieldset>
		<legend><?php echo __('Edit Whiteboard'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('reflection_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Whiteboard.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Whiteboard.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Whiteboards'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
