<?php
/* Reservation Test cases generated on: 2014-03-23 15:09:29 : 1395558569*/
App::import('Model', 'Reservation');

class ReservationTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation', 'app.customer', 'app.slot', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Reservation =& ClassRegistry::init('Reservation');
	}

	function endTest() {
		unset($this->Reservation);
		ClassRegistry::flush();
	}

}
