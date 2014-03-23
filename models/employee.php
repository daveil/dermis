<?php
class Employee extends AppModel {
	var $name = 'Employee';
	var $displayField = 'first_name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'ReservationService' => array(
			'className' => 'ReservationService',
			'foreignKey' => 'employee_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
