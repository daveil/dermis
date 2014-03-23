<?php
class Slot extends AppModel {
	var $name = 'Slot';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Area' => array(
			'className' => 'Area',
			'foreignKey' => 'area_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Reservation' => array(
			'className' => 'Reservation',
			'foreignKey' => 'slot_id',
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
