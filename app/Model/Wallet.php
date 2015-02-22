<?php
App::uses('AppModel', 'Model');
/**
 * Wallet Model
 *
 */
class Wallet extends AppModel {

	var $name='Wallet';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		
		'iban' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),
		'bank_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty')
			),
		),

		'cash_balance' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		)
);


	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'rc_id'
		)
	);

}
