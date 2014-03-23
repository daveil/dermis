<div class="reservations view">
<h2><?php  __('Reservation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Customer']['id'], array('controller' => 'customers', 'action' => 'view', $reservation['Customer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slot'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Slot']['name'], array('controller' => 'slots', 'action' => 'view', $reservation['Slot']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservation['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $reservation['Status']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Reserved'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['date_reserved']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Served'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['date_served']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservation['Reservation']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation', true), array('action' => 'edit', $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Reservation', true), array('action' => 'delete', $reservation['Reservation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservation['Reservation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Reservation Products');?></h3>
	<?php if (!empty($reservation['ReservationProduct'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Reservation Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Discount'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ReservationProduct'] as $reservationProduct):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reservationProduct['id'];?></td>
			<td><?php echo $reservationProduct['reservation_id'];?></td>
			<td><?php echo $reservationProduct['product_id'];?></td>
			<td><?php echo $reservationProduct['price'];?></td>
			<td><?php echo $reservationProduct['discount'];?></td>
			<td><?php echo $reservationProduct['created'];?></td>
			<td><?php echo $reservationProduct['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reservation_products', 'action' => 'view', $reservationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reservation_products', 'action' => 'edit', $reservationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reservation_products', 'action' => 'delete', $reservationProduct['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation Product', true), array('controller' => 'reservation_products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Reservation Services');?></h3>
	<?php if (!empty($reservation['ReservationService'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Reservation Id'); ?></th>
		<th><?php __('Service Id'); ?></th>
		<th><?php __('Start Time'); ?></th>
		<th><?php __('End Time'); ?></th>
		<th><?php __('Time Elapsed'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Discount'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ReservationService'] as $reservationService):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reservationService['id'];?></td>
			<td><?php echo $reservationService['reservation_id'];?></td>
			<td><?php echo $reservationService['service_id'];?></td>
			<td><?php echo $reservationService['start_time'];?></td>
			<td><?php echo $reservationService['end_time'];?></td>
			<td><?php echo $reservationService['time_elapsed'];?></td>
			<td><?php echo $reservationService['employee_id'];?></td>
			<td><?php echo $reservationService['created'];?></td>
			<td><?php echo $reservationService['modified'];?></td>
			<td><?php echo $reservationService['price'];?></td>
			<td><?php echo $reservationService['discount'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reservation_services', 'action' => 'view', $reservationService['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reservation_services', 'action' => 'edit', $reservationService['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reservation_services', 'action' => 'delete', $reservationService['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationService['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation Service', true), array('controller' => 'reservation_services', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
