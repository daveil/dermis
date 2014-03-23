<div class="operationSpecials view">
<h2><?php  __('Operation Special');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Special Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['special_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Open Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['open_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Close Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['close_time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $operationSpecial['OperationSpecial']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Special', true), array('action' => 'edit', $operationSpecial['OperationSpecial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Operation Special', true), array('action' => 'delete', $operationSpecial['OperationSpecial']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $operationSpecial['OperationSpecial']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Specials', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Special', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
