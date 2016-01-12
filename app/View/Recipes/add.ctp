<?php echo $this->Html->css('add'); ?>
<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
	<fieldset>
		<legend><?php echo __('レシピの追加(ヘルパーをCSSで改修)'); ?></legend>
 	    <?php
		    echo $this->Form->input('food_id', array('label' => '料理名'));
		    echo $this->Form->input('material_id', array('label' => '材料名'));
		    echo $this->Form->input('amount', array('label' => '数量'));
		    echo $this->Form->input('unit_id', array('label' => '単位'));
		    //echo $this->Form->input('modifed');
	    ?>
		<?php
			print_r($units);
		?>
	</fieldset>

	<fieldset class="org">
		<legend><?php echo __('レシピの追加(データ配列から独自に作成)'); ?></legend>
        <div class="canvas">
	        <p class="item_title">料理名:</p>
	        <select name="data[Recipe][food_id]" id="RecipeFoodId" required="required">
		    <?php
    		    foreach($foods as $key => $val){
				    echo '<option value="' . $key .'">' . $val . '</option>';
			    }
		    ?>
	        </select><br>
	        <p class="item_title">素材名:</p>
	        <select name="data[Recipe][material_id]" id="RecipeMaterialId" required="required">
		    <?php
		        foreach($materials as $key => $val){
			        echo '<option value="' . $key .'">' . $val . '</option>';
		        }
			?>
	        </select>
	        <p class="item_title">数量:</p>
	            <input name="data[Recipe][amount]" type="number" id="RecipeAmount" required="required"/>
	        <p class="item_title">単位:</p>
	        <select name="data[Recipe][unit_id]" id="RecipeUnitId" required="required">
		    <?php
 		        foreach($units as $key => $val){
			        echo '<option value="' . $key .'">' . $val . '</option>';
		        }
		    ?>
	        </select>
        </div>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
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
