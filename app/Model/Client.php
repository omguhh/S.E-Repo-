<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 */
class Client extends AppModel {

	var $name='Client';

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
		'phone_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
		)
	)
);

/**
 * how relatoinships arent supposed to work
 *
 */
	public $hasMany = array(

		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'rc_id',
			'dependent' => false
			),

		//one client has many transactions
		'PurchaseHistory' => array(
			'className' => 'PurchaseHistory',
			'foreignKey' => 'rc_id',
			'dependent' => true
		)
	);

	//how relationships are supposed to work
	public $hasOne = array(
		// a client has one wallet
		'Wallet' => array(
			'className' => 'Wallet',
			'foreignKey' => 'rc_id',
			'dependent' => true		
			),

	//a client has one FA
		'FinancialAdvisor' => array(
			'className' => 'FinancialAdvisor',
			'foreignKey' => 'rc_id',
			'dependent' => false	
			),

	//a client has one FA
		'Calendar' => array(
			'className' => 'Calendar',
			'foreignKey' => 'rc_id',
			'dependent' => false		
			),
		);

	// yolo
		public $belongsTo = array(
		'FinancialAdvisor' => array(
			'className' => 'FinancialAdvisor',
			'foreignKey' => 'fa_id'
		)
	);


}
