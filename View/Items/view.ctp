<div class="items view">
<h2><?php  echo __('Item'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['User']['name'], array('controller' => 'users', 'action' => 'view', $item['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Content Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($item['ContentType']['name'], array('controller' => 'content_types', 'action' => 'view', $item['ContentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($item['Item']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($item['Item']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Content Types'), array('controller' => 'content_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Content Type'), array('controller' => 'content_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Extras'), array('controller' => 'extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fbas'), array('controller' => 'fbas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fba'), array('controller' => 'fbas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galeries'), array('controller' => 'galeries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galery'), array('controller' => 'galeries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Md2s'), array('controller' => 'md2s', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Md2'), array('controller' => 'md2s', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Videos'), array('controller' => 'videos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Extras'); ?></h3>
	<?php if (!empty($item['Extra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Left'); ?></th>
		<th><?php echo __('Right'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Extra'] as $extra): ?>
		<tr>
			<td><?php echo $extra['id']; ?></td>
			<td><?php echo $extra['item_id']; ?></td>
			<td><?php echo $extra['name']; ?></td>
			<td><?php echo $extra['left']; ?></td>
			<td><?php echo $extra['right']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'extras', 'action' => 'view', $extra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'extras', 'action' => 'edit', $extra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'extras', 'action' => 'delete', $extra['id']), null, __('Are you sure you want to delete # %s?', $extra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Extra'), array('controller' => 'extras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fbas'); ?></h3>
	<?php if (!empty($item['Fba'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Model Url'); ?></th>
		<th><?php echo __('Texture Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Fba'] as $fba): ?>
		<tr>
			<td><?php echo $fba['id']; ?></td>
			<td><?php echo $fba['item_id']; ?></td>
			<td><?php echo $fba['model_url']; ?></td>
			<td><?php echo $fba['texture_url']; ?></td>
			<td><?php echo $fba['created']; ?></td>
			<td><?php echo $fba['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fbas', 'action' => 'view', $fba['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fbas', 'action' => 'edit', $fba['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fbas', 'action' => 'delete', $fba['id']), null, __('Are you sure you want to delete # %s?', $fba['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fba'), array('controller' => 'fbas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Galeries'); ?></h3>
	<?php if (!empty($item['Galery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Galery'] as $galery): ?>
		<tr>
			<td><?php echo $galery['id']; ?></td>
			<td><?php echo $galery['item_id']; ?></td>
			<td><?php echo $galery['url']; ?></td>
			<td><?php echo $galery['created']; ?></td>
			<td><?php echo $galery['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'galeries', 'action' => 'view', $galery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'galeries', 'action' => 'edit', $galery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'galeries', 'action' => 'delete', $galery['id']), null, __('Are you sure you want to delete # %s?', $galery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Galery'), array('controller' => 'galeries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Md2s'); ?></h3>
	<?php if (!empty($item['Md2'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Model Url'); ?></th>
		<th><?php echo __('Texture Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Md2'] as $md2): ?>
		<tr>
			<td><?php echo $md2['id']; ?></td>
			<td><?php echo $md2['item_id']; ?></td>
			<td><?php echo $md2['model_url']; ?></td>
			<td><?php echo $md2['texture_url']; ?></td>
			<td><?php echo $md2['created']; ?></td>
			<td><?php echo $md2['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'md2s', 'action' => 'view', $md2['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'md2s', 'action' => 'edit', $md2['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'md2s', 'action' => 'delete', $md2['id']), null, __('Are you sure you want to delete # %s?', $md2['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Md2'), array('controller' => 'md2s', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Videos'); ?></h3>
	<?php if (!empty($item['Video'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Url'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($item['Video'] as $video): ?>
		<tr>
			<td><?php echo $video['id']; ?></td>
			<td><?php echo $video['item_id']; ?></td>
			<td><?php echo $video['url']; ?></td>
			<td><?php echo $video['created']; ?></td>
			<td><?php echo $video['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'videos', 'action' => 'view', $video['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'videos', 'action' => 'edit', $video['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'videos', 'action' => 'delete', $video['id']), null, __('Are you sure you want to delete # %s?', $video['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Video'), array('controller' => 'videos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
