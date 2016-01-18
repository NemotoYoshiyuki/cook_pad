<?php echo $this->Html->css('view'); ?>
<div class="recipes view">
	<dl>
		<p><?php echo ($recipe['Food']['food_name']); ?></p>
	</dl>
	<img src=<?php echo ($recipe['Food']['food_photo']);?> width="100" height="100" alt="料理画像">

	<table>
		<tr><th colspan="2">材料</th></tr>
		<tr><td><?php echo ($recipe['Material']['material_name']); ?></td><td><?php echo ($recipe['Recipe']['amount']),($recipe['Unit']['unit_name']); ?></td></tr>
		<tr><td><?php echo ($recipe['Material']['material_name']); ?></td><td><?php echo ($recipe['Recipe']['amount']),($recipe['Unit']['unit_name']); ?></td></tr>
		<tr><td>醤油</td><td>大さじ2/1</td></tr>
		<tr><td>塩</td><td>少々</td></tr>
	</table>
	<p class="How_to">作り方</p>
	<textarea name="comment" cols="50" rows="3">自由に作成すること</textarea>
	<?php
	print_r($recipe);
	?>

	<table>
		<?php foreach ($recipe as $recipe): ?>
		<tr>
			<td>
				<?php echo ($recipe['Material']['material_name']); ?>
			</td>
			<td>
				<?php echo ($recipe['Recipe']['amount']); ?>
				<?php echo ($recipe['Unit']['unit_name']); ?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>

</div>
<div class="actions">
	<h3><?php echo __('作成'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('料理名'), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('素材名'), array('controller' => 'materials', 'action' => 'add')); ?> </li>
	</ul>
	<h3><?php echo __('閲覧'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('レシピList'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('料理List'), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('素材List'), array('controller' => 'materials', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('単位List'), array('controller' => 'units', 'action' => 'index')); ?> </li>
	</ul>
</div>
