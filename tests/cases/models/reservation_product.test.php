<?php
/* ReservationProduct Test cases generated on: 2014-03-23 15:09:28 : 1395558568*/
App::import('Model', 'ReservationProduct');

class ReservationProductTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation_product', 'app.reservation', 'app.product');

	function startTest() {
		$this->ReservationProduct =& ClassRegistry::init('ReservationProduct');
	}

	function endTest() {
		unset($this->ReservationProduct);
		ClassRegistry::flush();
	}

}
