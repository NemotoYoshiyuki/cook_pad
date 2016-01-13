<?php echo $this->Html->css('add'); ?>
<div class="recipes form">
<?php echo $this->Form->create('Recipe'); ?>
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

	<input type="button" class="add_bottom" value="素材を追加" />
	<?php echo $this->Form->end(__('Submit')); ?>




	<h1>-------jQueryでtableに行を追加するサンプル-------</h1>
	<table>
		<thead>
		<tr><th id="material_name1">素材名</th><th id="amount1">数量</th><th id="unit1">単位</th></tr>
		</thead>
		<tbody></tbody>
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










<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script>
	var material_name;
	var amount;
	var unit;
	jQuery(function(){
		jQuery('.add_bottom').click(function(){
			getData();
			jQuery('tbody').append(data);
			jQuery('.slide').slideDown("fast");
		});
		jQuery('.clear').click(function(){
			if (jQuery('tbody tr').length) {
				jQuery('tbody tr').remove();
			}
		});
	});
	function getData() {
		material_name = jQuery('#RecipeMaterialId').val();
		amount = jQuery('#RecipeAmount').val();
		unit = jQuery('#RecipeUnitId').val();
		data = '<tr><td><div class="slide">' + material_name + '</div></td><td><div class="slide price">' + amount + '</div></td><td><div class="slide number">' + unit + '</div></td></tr>';
	}
</script>
