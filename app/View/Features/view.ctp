<div class="features view">
<h2><?php echo __('Feature'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['feature']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature'), array('action' => 'edit', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature'), array('action' => 'delete', $feature['Feature']['id']), null, __('Are you sure you want to delete # %s?', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sns'), array('controller' => 'sns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sn'), array('controller' => 'sns', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Products'); ?></h3>
	<?php if (!empty($feature['Product'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Product Number'); ?></th>
		<th><?php echo __('Product Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($feature['Product'] as $product): ?>
		<tr>
			<td><?php echo $product['id']; ?></td>
			<td><?php echo $product['product_number']; ?></td>
			<td><?php echo $product['product_description']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'products', 'action' => 'delete', $product['id']), null, __('Are you sure you want to delete # %s?', $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sns'); ?></h3>
	<?php if (!empty($feature['Sn'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Sn'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Date Of Mfg'); ?></th>
		<th><?php echo __('Bom Ver'); ?></th>
		<th><?php echo __('Bom Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($feature['Sn'] as $sn): ?>
		<tr>
			<td><?php echo $sn['id']; ?></td>
			<td><?php echo $sn['sn']; ?></td>
			<td><?php echo $sn['product_id']; ?></td>
			<td><?php echo $sn['date_of_mfg']; ?></td>
			<td><?php echo $sn['bom_ver']; ?></td>
			<td><?php echo $sn['bom_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sns', 'action' => 'view', $sn['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sns', 'action' => 'edit', $sn['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sns', 'action' => 'delete', $sn['id']), null, __('Are you sure you want to delete # %s?', $sn['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sn'), array('controller' => 'sns', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
