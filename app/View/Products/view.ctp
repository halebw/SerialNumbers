<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Number'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['product_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), null, __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sns'), array('controller' => 'sns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sn'), array('controller' => 'sns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Sns'); ?></h3>
	<?php if (!empty($product['Sn'])): ?>
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
	<?php foreach ($product['Sn'] as $sn): ?>
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
<div class="related">
	<h3><?php echo __('Related Features'); ?></h3>
	<?php if (!empty($product['Feature'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Feature'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($product['Feature'] as $feature): ?>
		<tr>
			<td><?php echo $feature['id']; ?></td>
			<td><?php echo $feature['feature']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'features', 'action' => 'view', $feature['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'features', 'action' => 'edit', $feature['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'features', 'action' => 'delete', $feature['id']), null, __('Are you sure you want to delete # %s?', $feature['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
