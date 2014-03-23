<?php
/* Area Test cases generated on: 2014-03-23 16:06:05 : 1395561965*/
App::import('Model', 'Area');

class AreaTestCase extends CakeTestCase {
	var $fixtures = array('app.area', 'app.store', 'app.slot', 'app.reservation', 'app.customer', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Area =& ClassRegistry::init('Area');
	}

	function endTest() {
		unset($this->Area);
		ClassRegistry::flush();
	}

}
