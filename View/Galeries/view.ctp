<div class="galeries view">
<h2><?php  echo __('Galery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($galery['Item']['name'], array('controller' => 'items', 'action' => 'view', $galery['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Url'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($galery['Galery']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Galery'), array('action' => 'edit', $galery['Galery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Galery'), array('action' => 'delete', $galery['Galery']['id']), null, __('Are you sure you want to delete # %s?', $galery['Galery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galeries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
