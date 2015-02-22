<?php
App::uses('AppModel', 'Model');
/**
 * Admin Model
 *
 */
class Admin extends AppModel {

	var $name='Admin';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'admin_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'admin_email' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'admin_phone' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'fa_phone' => array(
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
		'FinancialAdvisor' => array(
			'className' => 'FinancialAdvisor',
			'foreignKey' => 'fa_id',
			'dependent' => false
			)
	);


}
