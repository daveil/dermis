<?php
/* Store Fixture generated on: 2014-03-23 16:06:13 : 1395561973 */
class StoreFixture extends CakeTestFixture {
	var $name = 'Store';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'location' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'time_slot_size' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'max_cover_per_time_slot' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'location' => 'Lorem ipsum dolor sit amet',
			'time_slot_size' => 1,
			'max_cover_per_time_slot' => 1,
			'created' => '2014-03-23 16:06:13',
			'modified' => '2014-03-23 16:06:13'
		),
	);
}
