<div class="reservations form">
<?php echo $this->Form->create('Reservation');?>
	<fieldset>
		<legend><?php __('Edit Reservation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('customer_id');
		echo $this->Form->input('slot_id');
		echo $this->Form->input('status_id');
		echo $this->Form->input('date_reserved');
		echo $this->Form->input('time_reserved');
		echo $this->Form->input('date_served');
		echo $this->Form->input('time_served');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Reservation.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Reservation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customers', true), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer', true), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Slots', true), array('controller' => 'slots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slot', true), array('controller' => 'slots', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Statuses', true), array('controller' => 'statuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Status', true), array('controller' => 'statuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Products', true), array('controller' => 'reservation_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Product', true), array('controller' => 'reservation_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Services', true), array('controller' => 'reservation_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Service', true), array('controller' => 'reservation_services', 'action' => 'add')); ?> </li>
	</ul>
</div>