<div class="operationSpecials index">
	<h2><?php __('Operation Specials');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('special_date');?></th>
			<th><?php echo $this->Paginator->sort('open_time');?></th>
			<th><?php echo $this->Paginator->sort('close_time');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($operationSpecials as $operationSpecial):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $operationSpecial['OperationSpecial']['id']; ?>&nbsp;</td>
		<td><?php echo $operationSpecial['OperationSpecial']['special_date']; ?>&nbsp;</td>
		<td><?php echo $operationSpecial['OperationSpecial']['open_time']; ?>&nbsp;</td>
		<td><?php echo $operationSpecial['OperationSpecial']['close_time']; ?>&nbsp;</td>
		<td><?php echo $operationSpecial['OperationSpecial']['created']; ?>&nbsp;</td>
		<td><?php echo $operationSpecial['OperationSpecial']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $operationSpecial['OperationSpecial']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $operationSpecial['OperationSpecial']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $operationSpecial['OperationSpecial']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operationSpecial['OperationSpecial']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operation Special', true), array('action' => 'add')); ?></li>
	</ul>
</div>