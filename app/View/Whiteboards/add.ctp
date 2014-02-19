<div class="whiteboards form">
<?php echo $this->Form->create('Whiteboard'); ?>
	<fieldset>
		<legend><?php echo __('Add Whiteboard'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('reflection_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Whiteboards'), array('action' => 'index')); ?></li>
	</ul>
</div>
