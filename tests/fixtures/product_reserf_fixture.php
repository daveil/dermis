<?php
/* ProductReserf Fixture generated on: 2014-03-23 15:08:52 : 1395558532 */
class ProductReserfFixture extends CakeTestFixture {
	var $name = 'ProductReserf';

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
			'created' => '2014-03-23 15:08:52',
			'modified' => '2014-03-23 15:08:52'
		),
	);
}
