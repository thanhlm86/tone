<?php
App::uses('AppModel', 'Model');
/**
 * LeadershipCategory Model
 *
 * @property hasOne $hasOne
 */
class LeadershipCategory extends AppModel {

/**
 * Display field
 *
 * @var string
 */
//	public $displayField = 'content';

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
        'number' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        )
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
//	public $hasMany = array(
//		'hasMany' => array(
//			'className' => 'hasOne',
//			'foreignKey' => 'id',
//			'conditions' => '',
//			'fields' => '',
//			'order' => ''
//		)
//	);
}
