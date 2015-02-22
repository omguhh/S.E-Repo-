<?php
App::uses('AppModel', 'Model');
/**
 * Calendar Model
 *
 */
class Calendar extends AppModel {

	var $name='Calendar';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'meeting_title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'meeting_date' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		),
		'meeting_time' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'required' => true
			)
		)
);
	//how relationships are supposed to work
	public $belongsTo = array(

		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'rc_id',
			'dependent' => false		
			),

		'FinancialAdvisor' => array(
			'className' => 'FinancialAdvisor',
			'foreignKey' => 'fa_id',
			'dependent' => true		
			),
		);
	
}
