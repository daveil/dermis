<div class="services view">
<h2><?php  __('Service');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $service['Service']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $service['Service']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $service['Service']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time Allowance'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $service['Service']['time_allowance']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Service', true), array('action' => 'edit', $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Service', true), array('action' => 'delete', $service['Service']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $service['Service']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Services', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Reservations');?></h3>
	<?php if (!empty($service['Reservation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Id'); ?></th>
		<th><?php __('Slot Id'); ?></th>
		<th><?php __('Status Id'); ?></th>
		<th><?php __('Date Reserved'); ?></th>
		<th><?php __('Date Served'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($service['Reservation'] as $reservation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $reservation['id'];?></td>
			<td><?php echo $reservation['customer_id'];?></td>
			<td><?php echo $reservation['slot_id'];?></td>
			<td><?php echo $reservation['status_id'];?></td>
			<td><?php echo $reservation['date_reserved'];?></td>
			<td><?php echo $reservation['date_served'];?></td>
			<td><?php echo $reservation['created'];?></td>
			<td><?php echo $reservation['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'reservations', 'action' => 'view', $reservation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'reservations', 'action' => 'edit', $reservation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'reservations', 'action' => 'delete', $reservation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
