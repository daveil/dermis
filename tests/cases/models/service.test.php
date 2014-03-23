<?php
/* Service Test cases generated on: 2014-03-23 15:09:30 : 1395558570*/
App::import('Model', 'Service');

class ServiceTestCase extends CakeTestCase {
	var $fixtures = array('app.service', 'app.reservation', 'app.customer', 'app.slot', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.employee');

	function startTest() {
		$this->Service =& ClassRegistry::init('Service');
	}

	function endTest() {
		unset($this->Service);
		ClassRegistry::flush();
	}

}
