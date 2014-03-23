<?php
/* OperationHour Test cases generated on: 2014-03-23 16:05:55 : 1395561955*/
App::import('Model', 'OperationHour');

class OperationHourTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_hour', 'app.store');

	function startTest() {
		$this->OperationHour =& ClassRegistry::init('OperationHour');
	}

	function endTest() {
		unset($this->OperationHour);
		ClassRegistry::flush();
	}

}
