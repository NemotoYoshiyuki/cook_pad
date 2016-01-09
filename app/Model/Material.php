<?php
App::uses('AppModel', 'Model');
/**
 * Material Model
 *
 * @property Recipe $Recipe
 */
class Material extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'material_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'material_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Recipe' => array(
			'className' => 'Recipe',
			'foreignKey' => 'material_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
