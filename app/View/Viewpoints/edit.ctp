<div class="viewpoints form">
<?php echo $this->Form->create('Viewpoint'); ?>
	<fieldset>
		<legend><?php echo __('Edit Viewpoint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Viewpoint.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Viewpoint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Viewpoints'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
