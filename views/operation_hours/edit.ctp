<div class="operationHours form">
<?php echo $this->Form->create('OperationHour');?>
	<fieldset>
		<legend><?php __('Edit Operation Hour'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('day');
		echo $this->Form->input('open_time');
		echo $this->Form->input('close_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('OperationHour.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('OperationHour.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operation Hours', true), array('action' => 'index'));?></li>
	</ul>
</div>