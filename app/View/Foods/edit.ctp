<div class="foods form">
<?php echo $this->Form->create('Food'); ?>
	<fieldset>
		<legend><?php echo __('Edit Food'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('food_name');
		echo $this->Form->input('food_photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Food.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Food.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Foods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recipes'), array('controller' => 'recipes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recipe'), array('controller' => 'recipes', 'action' => 'add')); ?> </li>
	</ul>
</div>
