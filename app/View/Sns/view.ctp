<div class="sns view">
<h2><?php echo __('Sn'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sn['Sn']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sn'); ?></dt>
		<dd>
			<?php echo h($sn['Sn']['sn']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Product'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sn['Product']['product_number'], array('controller' => 'products', 'action' => 'view', $sn['Product']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Mfg'); ?></dt>
		<dd>
			<?php echo h($sn['Sn']['date_of_mfg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Ver'); ?></dt>
		<dd>
			<?php echo h($sn['Sn']['bom_ver']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bom Date'); ?></dt>
		<dd>
			<?php echo h($sn['Sn']['bom_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sn'), array('action' => 'edit', $sn['Sn']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sn'), array('action' => 'delete', $sn['Sn']['id']), null, __('Are you sure you want to delete # %s?', $sn['Sn']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sns'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sn'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
