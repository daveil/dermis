<?php
/* Service Fixture generated on: 2014-03-23 15:09:29 : 1395558569 */
class ServiceFixture extends CakeTestFixture {
	var $name = 'Service';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'comment' => 'Service id'),
		'name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 25, 'collate' => 'latin1_swedish_ci', 'comment' => 'Service name', 'charset' => 'latin1'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'comment' => 'Suggested Retail Price'),
		'time_allowance' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Time allowance in minutes'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit a',
			'price' => 1,
			'time_allowance' => 1
		),
	);
}
