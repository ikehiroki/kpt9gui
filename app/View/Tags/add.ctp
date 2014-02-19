<div class="tags form">
    <?php echo $this->Form->create('Tag'); ?>
    <fieldset>
        <legend><?php echo __('Add Tag'); ?></legend>
        <?php
        echo $this->Form->input('whiteboard_id', array('selected' => $whiteboardId, 'disabled' => 'true'));
        echo $this->Form->input('whiteboard_id', array('type' => 'hidden', 'value' => $whiteboardId));
        echo $this->Form->input('viewpoint_id');
        echo $this->Form->input('content');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
    <h3><?php echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('List Whiteboards'), array('controller' => 'whiteboards', 'action' => 'index')); ?> </li>
    </ul>
</div>
