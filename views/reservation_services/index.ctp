<div class="reservationServices index">
	<h2><?php __('Reservation Services');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reservation_id');?></th>
			<th><?php echo $this->Paginator->sort('service_id');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('reserved_time');?></th>
			<th><?php echo $this->Paginator->sort('start_time');?></th>
			<th><?php echo $this->Paginator->sort('end_time');?></th>
			<th><?php echo $this->Paginator->sort('time_elapsed');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('discount');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reservationServices as $reservationService):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $reservationService['ReservationService']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reservationService['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $reservationService['Reservation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservationService['Service']['name'], array('controller' => 'services', 'action' => 'view', $reservationService['Service']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservationService['Employee']['first_name'], array('controller' => 'employees', 'action' => 'view', $reservationService['Employee']['id'])); ?>
		</td>
		<td><?php echo $reservationService['ReservationService']['reserved_time']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['start_time']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['end_time']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['time_elapsed']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['price']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['discount']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['created']; ?>&nbsp;</td>
		<td><?php echo $reservationService['ReservationService']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $reservationService['ReservationService']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $reservationService['ReservationService']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $reservationService['ReservationService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationService['ReservationService']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reservation Service', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>