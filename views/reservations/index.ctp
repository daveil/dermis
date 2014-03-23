<div class="reservations index">
	<h2><?php __('Reservations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_id');?></th>
			<th><?php echo $this->Paginator->sort('slot_id');?></th>
			<th><?php echo $this->Paginator->sort('status_id');?></th>
			<th><?php echo $this->Paginator->sort('date_reserved');?></th>
			<th><?php echo $this->Paginator->sort('time_reserved');?></th>
			<th><?php echo $this->Paginator->sort('date_served');?></th>
			<th><?php echo $this->Paginator->sort('time_served');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reservations as $reservation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $reservation['Reservation']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reservation['Customer']['first_name'], array('controller' => 'customers', 'action' => 'view', $reservation['Customer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservation['Slot']['name'], array('controller' => 'slots', 'action' => 'view', $reservation['Slot']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservation['Status']['name'], array('controller' => 'statuses', 'action' => 'view', $reservation['Status']['id'])); ?>
		</td>
		<td><?php echo $reservation['Reservation']['date_reserved']; ?>&nbsp;</td>
		<td><?php echo $reservation['Reservation']['time_reserved']; ?>&nbsp;</td>
		<td><?php echo $reservation['Reservation']['date_served']; ?>&nbsp;</td>
		<td><?php echo $reservation['Reservation']['time_served']; ?>&nbsp;</td>
		<td><?php echo $reservation['Reservation']['created']; ?>&nbsp;</td>
		<td><?php echo $reservation['Reservation']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $reservation['Reservation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservation['Reservation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reservation', true), array('action' => 'add')); ?></li>
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