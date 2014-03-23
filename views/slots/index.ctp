<div class="slots index">
	<h2><?php __('Slots');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('size');?></th>
			<th><?php echo $this->Paginator->sort('area_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($slots as $slot):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $slot['Slot']['id']; ?>&nbsp;</td>
		<td><?php echo $slot['Slot']['name']; ?>&nbsp;</td>
		<td><?php echo $slot['Slot']['code']; ?>&nbsp;</td>
		<td><?php echo $slot['Slot']['size']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($slot['Area']['name'], array('controller' => 'areas', 'action' => 'view', $slot['Area']['id'])); ?>
		</td>
		<td><?php echo $slot['Slot']['created']; ?>&nbsp;</td>
		<td><?php echo $slot['Slot']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $slot['Slot']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $slot['Slot']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $slot['Slot']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $slot['Slot']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Slot', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Areas', true), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area', true), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>