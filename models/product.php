<?php
class Product extends AppModel {
	var $name = 'Product';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Reservation' => array(
			'className' => 'Reservation',
			'joinTable' => 'reservation_products',
			'foreignKey' => 'product_id',
			'associationForeignKey' => 'reservation_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
