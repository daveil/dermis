<?php
/* Status Test cases generated on: 2014-03-23 15:09:30 : 1395558570*/
App::import('Model', 'Status');

class StatusTestCase extends CakeTestCase {
	var $fixtures = array('app.status', 'app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Status =& ClassRegistry::init('Status');
	}

	function endTest() {
		unset($this->Status);
		ClassRegistry::flush();
	}

}
