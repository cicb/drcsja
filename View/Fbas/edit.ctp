<div class="fbas form">
<?php echo $this->Form->create('Fba'); ?>
	<fieldset>
		<legend><?php echo __('Edit Fba'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Fba.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Fba.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Fbas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
