<div class="operationHours index">
	<h2><?php __('Operation Hours');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('day');?></th>
			<th><?php echo $this->Paginator->sort('open_time');?></th>
			<th><?php echo $this->Paginator->sort('close_time');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($operationHours as $operationHour):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $operationHour['OperationHour']['id']; ?>&nbsp;</td>
		<td><?php echo $operationHour['OperationHour']['day']; ?>&nbsp;</td>
		<td><?php echo $operationHour['OperationHour']['open_time']; ?>&nbsp;</td>
		<td><?php echo $operationHour['OperationHour']['close_time']; ?>&nbsp;</td>
		<td><?php echo $operationHour['OperationHour']['created']; ?>&nbsp;</td>
		<td><?php echo $operationHour['OperationHour']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $operationHour['OperationHour']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $operationHour['OperationHour']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $operationHour['OperationHour']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operationHour['OperationHour']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operation Hour', true), array('action' => 'add')); ?></li>
	</ul>
</div>