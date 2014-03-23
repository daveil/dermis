<div class="customers index">
	<h2><?php __('Customers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('birthday');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customers as $customer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customer['Customer']['id']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['first_name']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['last_name']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['gender']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['birthday']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['created']; ?>&nbsp;</td>
		<td><?php echo $customer['Customer']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customer['Customer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customer['Customer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customer['Customer']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>