<?php echo $this->Html->css('add'); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
	$(function(){
		var $i = 1;
		$('#add_materials').click(function(e) {
			var inputs;
			//var input0 = '料理名' + $i + ':<br><input type="text" name="data[Recipe][' + $i + '][food_id]" id="Recipe' + $i + 'food_id" required="required">';
			var input1 = '素材名' + $i + ':<br><input type="text" name="data[Recipe][' + $i + '][material_id]" id="Recipe' + $i + 'material_id" required="required">';
			var input2 = '数量' + $i + ':<br><input type="text" name="data[Recipe][' + $i + '][amount]" id="Recipe' + $i + 'amount" required="required">';
			var input3 = '単位' + $i + ':<br><input type="text" name="data[Recipe][' + $i + '][unit_id]" id="Recipe' + $i + 'unit_id" required="required">';

			inputs = input1 + input2 + input3;

			$('#add_materials').before(inputs);
			$i++;
		});
	});
</script>


<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset class="org">
	<legend><?php echo __('レシピの追加(データ配列から独自に作成)'); ?></legend>
		<?php
			echo $this->Form->input('Recipe.0.food_id', array('label'=>'料理名'));
			//echo $this->Form->input('material_id', array('label'=>'素材名'));
			//echo $this->Form->input('amount', array('label'=>'数量'));
			//echo $this->Form->input('unit_id', array('label'=>'単位'));
		echo $this->Form->input('Recipe.0.material_id', array('label'=>'素材名'));
		echo $this->Form->input('Recipe.0.amount', array('label'=>'数量'));
		echo $this->Form->input('Recipe.0.unit_id', array('label'=>'単位'));
		?>

		<div class="submit" id="add_materials"><input type="button" value="素材追加"/></div>
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

