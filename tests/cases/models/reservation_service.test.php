<?php
/* ReservationService Test cases generated on: 2014-03-23 15:09:29 : 1395558569*/
App::import('Model', 'ReservationService');

class ReservationServiceTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation_service', 'app.reservation', 'app.service', 'app.employee');

	function startTest() {
		$this->ReservationService =& ClassRegistry::init('ReservationService');
	}

	function endTest() {
		unset($this->ReservationService);
		ClassRegistry::flush();
	}

}
