<div class="recipes view">
<h2><?php echo __('Recipe'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Food'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['Food']['food_name'], array('controller' => 'foods', 'action' => 'view', $recipe['Food']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Material'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['Material']['material_name'], array('controller' => 'materials', 'action' => 'view', $recipe['Material']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recipe['Unit']['unit_name'], array('controller' => 'units', 'action' => 'view', $recipe['Unit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifed'); ?></dt>
		<dd>
			<?php echo h($recipe['Recipe']['modifed']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recipe'), array('action' => 'edit', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recipe'), array('action' => 'delete', $recipe['Recipe']['id']), array(), __('Are you sure you want to delete # %s?', $recipe['Recipe']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materials'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Material'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('controller' => 'units', 'action' => 'add')); ?> </li>
	</ul>
</div>
