<?php
class Reservation extends AppModel {
	var $name = 'Reservation';
	var $virtualFields  =  array(
						'schedule'=>"CONCAT(DATE_FORMAT(Reservation.time_reserved,'%l:%i %p'), ' - ' , DATE_FORMAT(Reservation.estimate_end,'%l:%i %p'))"
					);
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
		//Convert microtime to date and time
		$date = date('Y-m-d',$microtime);
		$start_time = date('Hi',$microtime);
		$end_time = date('Hi',$microtime+TIME_SLOT_STEP);
		//Buffer on ending
		$buffer = '0000';
		//PRIME values
		$_STPRIME = $start_time.$end_time; //Start Time Prime
		$_ETPRIME = $end_time.$buffer; //End Time Prime
		$_TRPRIME = "CONVERT(CONCAT(DATE_FORMAT(Reservation.time_reserved,'%k%i'),DATE_FORMAT(Reservation.estimate_end,'%k%i')), UNSIGNED INTEGER)"; //Time Reserved Prime
		$_EEPRIME = "CONVERT(CONCAT(DATE_FORMAT(Reservation.estimate_end,'%k%i'),'$buffer'), UNSIGNED INTEGER)"; //Estimate End Prime
		//Build condition
		$cond = array('Reservation.date_reserved'=>$date,
					'OR'=>array(
						array($_TRPRIME.'>='.$_STPRIME,$_TRPRIME.'<='.$_ETPRIME),
						array($_TRPRIME.'<='.$_STPRIME,$_EEPRIME.'>='.$_ETPRIME),
						array($_EEPRIME.'>='.$_STPRIME,$_EEPRIME.'<='.$_ETPRIME),
						)		
					);
		return $this->find('all',array('conditions'=>$cond));
	}
}
