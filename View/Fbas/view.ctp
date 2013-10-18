<div class="fbas view">
<h2><?php  echo __('Fba'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fba['Fba']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fba['Item']['name'], array('controller' => 'items', 'action' => 'view', $fba['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Url'); ?></dt>
		<dd>
			<?php echo h($fba['Fba']['model_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Texture Url'); ?></dt>
		<dd>
			<?php echo h($fba['Fba']['texture_url']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($fba['Fba']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($fba['Fba']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fba'), array('action' => 'edit', $fba['Fba']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fba'), array('action' => 'delete', $fba['Fba']['id']), null, __('Are you sure you want to delete # %s?', $fba['Fba']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fbas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fba'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
