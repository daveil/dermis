<?php
/* Store Test cases generated on: 2014-03-23 16:06:13 : 1395561973*/
App::import('Model', 'Store');

class StoreTestCase extends CakeTestCase {
	var $fixtures = array('app.store', 'app.area', 'app.slot', 'app.reservation', 'app.customer', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee', 'app.operation_hour', 'app.operation_special');

	function startTest() {
		$this->Store =& ClassRegistry::init('Store');
	}

	function endTest() {
		unset($this->Store);
		ClassRegistry::flush();
	}

}
