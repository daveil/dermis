<div class="reservationProducts form">
<?php echo $this->Form->create('ReservationProduct');?>
	<fieldset>
		<legend><?php __('Edit Reservation Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reservation_id');
		echo $this->Form->input('product_id');
		echo $this->Form->input('price');
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ReservationProduct.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ReservationProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservation Products', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>