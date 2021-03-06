<div class="recipes index">
	<h2><?php echo __('Recipes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('food_id'); ?></th>
			<th><?php echo $this->Paginator->sort('material_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modifed'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($recipes as $recipe): ?>
	<tr>
		<td><?php echo h($recipe['Recipe']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recipe['Food']['food_name'], array('controller' => 'foods', 'action' => 'view', $recipe['Food']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recipe['Material']['material_name'], array('controller' => 'materials', 'action' => 'view', $recipe['Material']['id'])); ?>
		</td>
		<td><?php echo h($recipe['Recipe']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recipe['Unit']['unit_name'], array('controller' => 'units', 'action' => 'view', $recipe['Unit']['id'])); ?>
		</td>
		<td><?php echo h($recipe['Recipe']['created']); ?>&nbsp;</td>
		<td><?php echo h($recipe['Recipe']['modifed']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recipe['Recipe']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recipe['Recipe']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recipe['Recipe']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $recipe['Recipe']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
