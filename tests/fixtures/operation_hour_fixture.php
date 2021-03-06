<?php
/* OperationHour Fixture generated on: 2014-03-23 16:05:55 : 1395561955 */
class OperationHourFixture extends CakeTestFixture {
	var $name = 'OperationHour';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'day' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'open_time' => array('type' => 'time', 'null' => true, 'default' => NULL),
		'close_time' => array('type' => 'time', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'store_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'day' => 'Lorem ipsum dolor sit ame',
			'open_time' => '16:05:55',
			'close_time' => '16:05:55',
			'created' => '2014-03-23 16:05:55',
			'modified' => '2014-03-23 16:05:55',
			'store_id' => 1
		),
	);
}
