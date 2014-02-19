<?php

App::uses('AppModel', 'Model');

/**
 * Tag Model
 *
 * @package       app.Model
 * @property Whiteboard $Whiteboard
 * @property Viewpoint $Viewpoint
 */
class Tag extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'content' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Whiteboard' => array(
			'className' => 'Whiteboard',
			'foreignKey' => 'whiteboard_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Viewpoint' => array(
			'className' => 'Viewpoint',
			'foreignKey' => 'viewpoint_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

}
