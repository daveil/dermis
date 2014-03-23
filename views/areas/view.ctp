<div class="areas view">
<h2><?php  __('Area');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $area['Area']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $area['Area']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $area['Area']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $area['Area']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $area['Area']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Area', true), array('action' => 'edit', $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Area', true), array('action' => 'delete', $area['Area']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $area['Area']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Areas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Area', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Slots', true), array('controller' => 'slots', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Slot', true), array('controller' => 'slots', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Slots');?></h3>
	<?php if (!empty($area['Slot'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Code'); ?></th>
		<th><?php __('Size'); ?></th>
		<th><?php __('Area Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($area['Slot'] as $slot):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $slot['id'];?></td>
			<td><?php echo $slot['name'];?></td>
			<td><?php echo $slot['code'];?></td>
			<td><?php echo $slot['size'];?></td>
			<td><?php echo $slot['area_id'];?></td>
			<td><?php echo $slot['created'];?></td>
			<td><?php echo $slot['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'slots', 'action' => 'view', $slot['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'slots', 'action' => 'edit', $slot['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'slots', 'action' => 'delete', $slot['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $slot['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Slot', true), array('controller' => 'slots', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
