<div class="tags view">
<h2><?php echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Whiteboard'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tag['Whiteboard']['name'], array('controller' => 'whiteboards', 'action' => 'view', $tag['Whiteboard']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Viewpoint'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tag['Viewpoint']['name'], array('controller' => 'viewpoints', 'action' => 'view', $tag['Viewpoint']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['content']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Whiteboards'), array('controller' => 'whiteboards', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Whiteboard'), array('controller' => 'whiteboards', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Viewpoints'), array('controller' => 'viewpoints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Viewpoint'), array('controller' => 'viewpoints', 'action' => 'add')); ?> </li>
	</ul>
</div>
