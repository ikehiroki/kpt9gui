<?php

App::uses('AppModel', 'Model');

/**
 * Whiteboard Model
 *
 * @package       app.Model
 * @property Tag $Tag
 */
class Whiteboard extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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
		'Tag' => array(
			'className' => 'Tag',
			'foreignKey' => 'whiteboard_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => array('viewpoint_id', 'id'),
			'limit' => '',
			'offset' => '',
			'exclusive' => false,
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
