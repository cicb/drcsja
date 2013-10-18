<div class="extras form">
<?php echo $this->Form->create('Extra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Extra'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('name');
		echo $this->Form->input('left');
		echo $this->Form->input('right');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Extra.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Extra.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Extras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
