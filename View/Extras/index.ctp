<div class="extras index">
	<h2><?php echo __('Extras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('left'); ?></th>
			<th><?php echo $this->Paginator->sort('right'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($extras as $extra): ?>
	<tr>
		<td><?php echo h($extra['Extra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($extra['Item']['name'], array('controller' => 'items', 'action' => 'view', $extra['Item']['id'])); ?>
		</td>
		<td><?php echo h($extra['Extra']['name']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['left']); ?>&nbsp;</td>
		<td><?php echo h($extra['Extra']['right']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $extra['Extra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $extra['Extra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $extra['Extra']['id']), null, __('Are you sure you want to delete # %s?', $extra['Extra']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Extra'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
