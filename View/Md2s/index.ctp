<div class="md2s index">
	<h2><?php echo __('Md2s'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('item_id'); ?></th>
			<th><?php echo $this->Paginator->sort('model_url'); ?></th>
			<th><?php echo $this->Paginator->sort('texture_url'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($md2s as $md2): ?>
	<tr>
		<td><?php echo h($md2['Md2']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($md2['Item']['name'], array('controller' => 'items', 'action' => 'view', $md2['Item']['id'])); ?>
		</td>
		<td><?php echo h($md2['Md2']['model_url']); ?>&nbsp;</td>
		<td><?php echo h($md2['Md2']['texture_url']); ?>&nbsp;</td>
		<td><?php echo h($md2['Md2']['created']); ?>&nbsp;</td>
		<td><?php echo h($md2['Md2']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $md2['Md2']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $md2['Md2']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $md2['Md2']['id']), null, __('Are you sure you want to delete # %s?', $md2['Md2']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Md2'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
