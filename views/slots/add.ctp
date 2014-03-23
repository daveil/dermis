<div class="slots form">
<?php echo $this->Form->create('Slot');?>
	<fieldset>
		<legend><?php __('Add Slot'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('code');
		echo $this->Form->input('size');
		echo $this->Form->input('area_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Slots', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Areas', true), array('controller' => 'areas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area', true), array('controller' => 'areas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations', true), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation', true), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>