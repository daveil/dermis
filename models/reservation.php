<?php
class Reservation extends AppModel {
	var $name = 'Reservation';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Slot' => array(
			'className' => 'Slot',
			'foreignKey' => 'slot_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Status' => array(
			'className' => 'Status',
			'foreignKey' => 'status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'ReservationProduct' => array(
			'className' => 'ReservationProduct',
			'foreignKey' => 'reservation_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'ReservationService' => array(
			'className' => 'ReservationService',
			'foreignKey' => 'reservation_id',
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
	function getByMicrotime($microtime){
		
		$date = date('Y-m-d',$microtime);
		$start_time = date('H:i ',$microtime);
		$end_time = date('H:i ',$microtime+TIME_SLOT_STEP);
		
		$cond = array('Reservation.date_reserved'=>$date,
					'Reservation.time_reserved >='=>$start_time,
					'Reservation.time_reserved <='=>$end_time,
					);
		return $this->find('all',array('conditions'=>$cond));
	}
}
