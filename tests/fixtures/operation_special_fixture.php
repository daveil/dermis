<?php
/* OperationSpecial Fixture generated on: 2014-03-23 16:06:01 : 1395561961 */
class OperationSpecialFixture extends CakeTestFixture {
	var $name = 'OperationSpecial';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'special_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
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
			'special_date' => '2014-03-23',
			'open_time' => '16:06:01',
			'close_time' => '16:06:01',
			'created' => '2014-03-23 16:06:01',
			'modified' => '2014-03-23 16:06:01',
			'store_id' => 1
		),
	);
}
