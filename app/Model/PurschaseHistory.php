<?php
App::uses('AppModel', 'Model');
/**
 * PurchaseHistory Model
 *
 */
class PurchaseHistory extends AppModel {

	var $name='PurchaseHistory';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'client_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'date_bought' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'fa_id' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		)
	)

);

/**
 * how relatoinships arent supposed to work
 *
 */
		public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'rc_id'
		)
	);

}
