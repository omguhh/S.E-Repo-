<?php
App::uses('AppModel', 'Model');
/**
 * FinancialAdvisor Model
 *
 */
class FinancialAdvisor extends AppModel {

	var $name='FinancialAdvisor';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'fa_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'fa_email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'fa_address' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'fa_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
		),
)
		'fa_rating' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'years_experience' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),

		'certificate' => array(
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

		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'rc_id',
			'dependent' => false
			),

		// 1 FA can view many stocks?
		'Stock' => array(
			'className' => 'Stock',
			'foreignKey' => 'fa_id',
			'dependent' => false
			),

		//??????????????? is a FA supposed to have transaction history..or is it just for the client? halp.
		'PurchaseHistory' => array(
			'className' => 'PurchaseHistory',
			'foreignKey' => 'rc_id',
			'dependent' => false
		)
	);

	//how relationships are supposed to work
	public $hasOne = array(
		// does the FA view one wallet or multiple wallets? halp. 
		'Wallet' => array(
			'className' => 'Wallet',
			'foreignKey' => 'rc_id',
			'dependent' => false		
			),

	//an FA has one calendar
		'Calendar' => array(
			'className' => 'Calendar',
			'foreignKey' => 'fa_id',
			'dependent' => true		
			),
		);

		public $belongsTo = array(
		'Admin' => array(
			'className' => 'Admin',
			'foreignKey' => 'fa_id'
		)
	);

}
