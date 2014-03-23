<?php
/* Status Fixture generated on: 2014-03-23 15:09:30 : 1395558570 */
class StatusFixture extends CakeTestFixture {
	var $name = 'Status';

	var $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 1, 'key' => 'primary', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 'Lorem ipsum dolor sit ame',
			'name' => 'Lorem ip'
		),
	);
}
