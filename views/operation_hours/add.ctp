<div class="operationHours form">
<?php echo $this->Form->create('OperationHour');?>
	<fieldset>
		<legend><?php __('Add Operation Hour'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Operation Hours', true), array('action' => 'index'));?></li>
	</ul>
</div>