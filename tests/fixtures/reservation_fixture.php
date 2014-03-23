<?php
/* Reservation Fixture generated on: 2014-03-23 15:09:29 : 1395558569 */
class ReservationFixture extends CakeTestFixture {
	var $name = 'Reservation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'Reservation Id'),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Customer Id'),
		'slot_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'status_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => 'Reservation status: Active, Idle, Waiting, No show, Finished', 'charset' => 'latin1'),
		'date_reserved' => array('type' => 'date', 'null' => true, 'default' => NULL, 'comment' => 'Date Reserved'),
		'date_served' => array('type' => 'date', 'null' => true, 'default' => NULL, 'comment' => 'Date Served'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'slot_id' => 1,
			'status_id' => 'Lorem ipsum dolor sit ame',
			'date_reserved' => '2014-03-23',
			'date_served' => '2014-03-23',
			'created' => '2014-03-23 15:09:29',
			'modified' => '2014-03-23 15:09:29'
		),
	);
}
