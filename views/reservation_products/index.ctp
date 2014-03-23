<div class="reservationProducts index">
	<h2><?php __('Reservation Products');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reservation_id');?></th>
			<th><?php echo $this->Paginator->sort('product_id');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('discount');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($reservationProducts as $reservationProduct):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $reservationProduct['ReservationProduct']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reservationProduct['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $reservationProduct['Reservation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reservationProduct['Product']['name'], array('controller' => 'products', 'action' => 'view', $reservationProduct['Product']['id'])); ?>
		</td>
		<td><?php echo $reservationProduct['ReservationProduct']['price']; ?>&nbsp;</td>
		<td><?php echo $reservationProduct['ReservationProduct']['discount']; ?>&nbsp;</td>
		<td><?php echo $reservationProduct['ReservationProduct']['created']; ?>&nbsp;</td>
		<td><?php echo $reservationProduct['ReservationProduct']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $reservationProduct['ReservationProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $reservationProduct['ReservationProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $reservationProduct['ReservationProduct']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $reservationProduct['ReservationProduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reservation Product', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>