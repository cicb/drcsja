<div class="md2s form">
<?php echo $this->Form->create('Md2'); ?>
	<fieldset>
		<legend><?php echo __('Edit Md2'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('item_id');
		echo $this->Form->input('model_url');
		echo $this->Form->input('texture_url');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Md2.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Md2.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Md2s'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
