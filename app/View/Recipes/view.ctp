
<div class="recipes view">
	<h2><?php echo __('Cook Pad'); ?></h2>
	<dl>
		<?php echo ($recipe['Food']['food_name']); ?>
	</dl>
	<img src=<? echo ($recipe['Food']['food_photo']);?> width="50" height="50" alt="料理画像">
	<table border="1">
		<tr bgcolor="#f4a460"><th>材料</th></tr>
		<tr><td><?php echo ($recipe['Material']['material_name']); ?></td><td><?php echo ($recipe['Recipe']['amount']),($recipe['Unit']['unit_name']); ?></td></tr>
		<tr><td><?php echo ($recipe['Material']['material_name']); ?></td><td><?php echo ($recipe['Recipe']['amount']),($recipe['Unit']['unit_name']); ?></td></tr>
		<tr><td>醤油</td><td>大さじ2/1</td></tr>
		<tr><td>塩</td><td>少々</td></tr>
	</table>
	作り方
	<textarea name="comment" cols="50" rows="3">自由に作成すること</textarea>

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
