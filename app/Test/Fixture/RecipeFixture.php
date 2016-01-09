<?php
/**
 * RecipeFixture
 *
 */
class RecipeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'food_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'material_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'amount' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'unit_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modifed' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'food_id' => 1,
			'material_id' => 1,
			'amount' => 1,
			'unit_id' => 1,
			'created' => '2016-01-09 10:14:28',
			'modifed' => '2016-01-09 10:14:28'
		),
	);

}
