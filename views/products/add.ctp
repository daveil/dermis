<div class="products form">
<?php echo $this->Form->create('Product');?>
	<fieldset>
		<legend><?php __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('price');
		echo $this->Form->input('Reservation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>