<?php
App::uses('AppModel', 'Model');
/**
 * Stocks Model
 *
 */
class Stocks extends AppModel {

	var $name='Stocks';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'category' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'price' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'number_of_stock' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
		),
)

);

/**
 * how relatoinships arent supposed to work
 *
 */
		public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'stock_id'
		)
	);

}
