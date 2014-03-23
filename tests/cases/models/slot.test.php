<?php
/* Slot Test cases generated on: 2014-03-23 15:09:30 : 1395558570*/
App::import('Model', 'Slot');

class SlotTestCase extends CakeTestCase {
	var $fixtures = array('app.slot', 'app.area', 'app.reservation', 'app.customer', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Slot =& ClassRegistry::init('Slot');
	}

	function endTest() {
		unset($this->Slot);
		ClassRegistry::flush();
	}

}
