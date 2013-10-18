<div class="md2s view">
<h2><?php  echo __('Md2'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($md2['Md2']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($md2['Item']['name'], array('controller' => 'items', 'action' => 'view', $md2['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Url'); ?></dt>
		<dd>
			<?php echo h($md2['Md2']['model_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texture Url'); ?></dt>
		<dd>
			<?php echo h($md2['Md2']['texture_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($md2['Md2']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($md2['Md2']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Md2'), array('action' => 'edit', $md2['Md2']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Md2'), array('action' => 'delete', $md2['Md2']['id']), null, __('Are you sure you want to delete # %s?', $md2['Md2']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Md2s'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Md2'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
