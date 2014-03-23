<div class="employees view">
<h2><?php  __('Employee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birthday'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['birthday']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $employee['Employee']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Employee', true), array('action' => 'edit', $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Employee', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Services', true), array('controller' => 'reservation_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Service', true), array('controller' => 'reservation_services', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Reservation Services');?></h3>
	<?php if (!empty($employee['ReservationService'])):?>
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
		foreach ($employee['ReservationService'] as $reservationService):
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
