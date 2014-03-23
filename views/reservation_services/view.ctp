<div class="reservationServices view">
<h2><?php  __('Reservation Service');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Reservation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservationService['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $reservationService['Reservation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Service'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservationService['Service']['name'], array('controller' => 'services', 'action' => 'view', $reservationService['Service']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Start Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['start_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('End Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['end_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time Elapsed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['time_elapsed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($reservationService['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $reservationService['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $reservationService['ReservationService']['discount']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reservation Service', true), array('action' => 'edit', $reservationService['ReservationService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Reservation Service', true), array('action' => 'delete', $reservationService['ReservationService']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationService['ReservationService']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Services', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Service', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('controller' => 'services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('controller' => 'services', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>
