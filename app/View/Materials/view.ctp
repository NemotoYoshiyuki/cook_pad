<div class="materials view">
<h2><?php echo __('Material'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($material['Material']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material Name'); ?></dt>
		<dd>
			<?php echo h($material['Material']['material_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($material['Material']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($material['Material']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Material'), array('action' => 'edit', $material['Material']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Material'), array('action' => 'delete', $material['Material']['id']), array(), __('Are you sure you want to delete # %s?', $material['Material']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Recipes'); ?></h3>
	<?php if (!empty($material['Recipe'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Food Id'); ?></th>
		<th><?php echo __('Material Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modifed'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($material['Recipe'] as $recipe): ?>
		<tr>
			<td><?php echo $recipe['id']; ?></td>
			<td><?php echo $recipe['food_id']; ?></td>
			<td><?php echo $recipe['material_id']; ?></td>
			<td><?php echo $recipe['amount']; ?></td>
			<td><?php echo $recipe['unit_id']; ?></td>
			<td><?php echo $recipe['created']; ?></td>
			<td><?php echo $recipe['modifed']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recipes', 'action' => 'view', $recipe['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recipes', 'action' => 'edit', $recipe['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recipes', 'action' => 'delete', $recipe['id']), array(), __('Are you sure you want to delete # %s?', $recipe['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
