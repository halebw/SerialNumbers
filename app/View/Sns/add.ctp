<div class="sns form">
<?php echo $this->Form->create('Sn'); ?>
	<fieldset>
		<legend><?php echo __('Add Sn'); ?></legend>
	<?php
		echo $this->Form->input('sn');
		echo $this->Form->input('product_id');
		echo $this->Form->input('date_of_mfg');
		echo $this->Form->input('bom_ver');
		echo $this->Form->input('bom_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sns'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
