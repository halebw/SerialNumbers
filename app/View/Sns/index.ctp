<div class="sns index">
	<h2><?php echo __('Sns'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('sn'); ?></th>
			<th><?php echo $this->Paginator->sort('product_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_mfg'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_ver'); ?></th>
			<th><?php echo $this->Paginator->sort('bom_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($sns as $sn): ?>
	<tr>
		<td><?php echo h($sn['Sn']['id']); ?>&nbsp;</td>
		<td><?php echo h($sn['Sn']['sn']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sn['Product']['product_number'], array('controller' => 'products', 'action' => 'view', $sn['Product']['id'])); ?>
		</td>
		<td><?php echo h($sn['Sn']['date_of_mfg']); ?>&nbsp;</td>
		<td><?php echo h($sn['Sn']['bom_ver']); ?>&nbsp;</td>
		<td><?php echo h($sn['Sn']['bom_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sn['Sn']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sn['Sn']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sn['Sn']['id']), null, __('Are you sure you want to delete # %s?', $sn['Sn']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sn'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
