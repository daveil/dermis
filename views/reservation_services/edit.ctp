<div class="reservationServices form">
<?php echo $this->Form->create('ReservationService');?>
	<fieldset>
		<legend><?php __('Edit Reservation Service'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reservation_id');
		echo $this->Form->input('service_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('reserved_time');
		echo $this->Form->input('start_time');
		echo $this->Form->input('end_time');
		echo $this->Form->input('time_elapsed');
		echo $this->Form->input('price');
		echo $this->Form->input('discount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ReservationService.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ReservationService.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Reservation Services', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>