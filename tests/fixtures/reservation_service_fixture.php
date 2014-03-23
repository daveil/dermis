<?php
/* ReservationService Fixture generated on: 2014-03-23 15:09:29 : 1395558569 */
class ReservationServiceFixture extends CakeTestFixture {
	var $name = 'ReservationService';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'Primary key'),
		'reservation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Reservation Id'),
		'service_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Serviced Id'),
		'start_time' => array('type' => 'time', 'null' => true, 'default' => NULL, 'comment' => 'Start time'),
		'end_time' => array('type' => 'time', 'null' => true, 'default' => NULL, 'comment' => 'End time'),
		'time_elapsed' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Time elapsed in minutes'),
		'employee_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Employee who did the service'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'discount' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'reservation_id' => 1,
			'service_id' => 1,
			'start_time' => '15:09:29',
			'end_time' => '15:09:29',
			'time_elapsed' => 1,
			'employee_id' => 1,
			'created' => '2014-03-23 15:09:29',
			'modified' => '2014-03-23 15:09:29',
			'price' => 1,
			'discount' => 1
		),
	);
}
