<div class="areas form">
<?php echo $this->Form->create('Area');?>
	<fieldset>
		<legend><?php __('Add Area'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Areas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Slots', true), array('controller' => 'slots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slot', true), array('controller' => 'slots', 'action' => 'add')); ?> </li>
	</ul>
</div>