<div class="operationHours view">
<h2><?php  __('Operation Hour');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Day'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['day']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Open Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['open_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Close Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['close_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationHour['OperationHour']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Hour', true), array('action' => 'edit', $operationHour['OperationHour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Operation Hour', true), array('action' => 'delete', $operationHour['OperationHour']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operationHour['OperationHour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Hours', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Hour', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
