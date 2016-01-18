<?php echo $this->Html->css('add'); ?>

<div class="recipes form">
	<?php echo $this->Form->create('Recipe'); ?>
	<fieldset class="org">
		<legend><?php echo __('レシピの追加(データ配列から独自に作成)'); ?></legend>
		<?php
		echo $this->Form->input('food_id', array('label'=>'料理名'));
		echo $this->Form->input('material_id', array('label'=>'素材名'));
		echo $this->Form->input('amount', array('label'=>'数量'));
		echo $this->Form->input('unit_id', array('label'=>'単位'));
		?>

	</fieldset>
	<?php echo $this->Form->end(__('データベースにまとめてレコードを追加')); ?>
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

