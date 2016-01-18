<?php echo $this->Html->css('view'); ?>
<div class="recipes view">
	<dl>
		<p><?php echo h($recipe['Food']['food_name']); ?></p>
	</dl>

	<img class="img" src=<?php echo ($recipe['Food']['food_photo']);?> width="" height="" alt="料理画像">
	<table class="table">
		<tr>
			<th colspan="2">材料</th>
		</tr>
		<?php foreach ($results as $key): ?>
			<tr>
				<td>
					<?php echo ($key['Material']['material_name']); ?>
				</td>
				<td>
					<?php echo ($key['Recipe']['amount']); ?>
					<?php echo ($key['Unit']['unit_name']); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<p class="How_to">作り方</p>
	<p><?php echo h($recipe['Food']['how_to']); ?></p>
	<?php echo $this->Html->link(__('作り方を投稿する'), array('action' => 'edit', $recipe['Food']['id'])); ?>

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
