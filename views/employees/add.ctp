<div class="employees form">
<?php echo $this->Form->create('Employee');?>
	<fieldset>
		<legend><?php __('Add Employee'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('birthday');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Employees', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservation Services', true), array('controller' => 'reservation_services', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Service', true), array('controller' => 'reservation_services', 'action' => 'add')); ?> </li>
	</ul>
</div>