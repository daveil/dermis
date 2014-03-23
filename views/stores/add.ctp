<div class="stores form">
<?php echo $this->Form->create('Store');?>
	<fieldset>
		<legend><?php __('Add Store'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('location');
		echo $this->Form->input('time_slot_size');
		echo $this->Form->input('max_cover_per_time_slot');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index'));?></li>
	</ul>
</div>