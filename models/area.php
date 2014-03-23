<?php
class Area extends AppModel {
	var $name = 'Area';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Slot' => array(
			'className' => 'Slot',
			'foreignKey' => 'area_id',
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
