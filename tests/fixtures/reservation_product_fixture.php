<?php
/* ReservationProduct Fixture generated on: 2014-03-23 15:09:28 : 1395558568 */
class ReservationProductFixture extends CakeTestFixture {
	var $name = 'ReservationProduct';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'Primary key'),
		'reservation_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Reservation Id'),
		'product_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Product Id'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'discount' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'reservation_id' => 1,
			'product_id' => 1,
			'price' => 1,
			'discount' => 1,
			'created' => '2014-03-23 15:09:28',
			'modified' => '2014-03-23 15:09:28'
		),
	);
}
