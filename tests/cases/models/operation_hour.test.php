<?php
/* OperationHour Test cases generated on: 2014-03-23 15:38:46 : 1395560326*/
App::import('Model', 'OperationHour');

class OperationHourTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_hour');

	function startTest() {
		$this->OperationHour =& ClassRegistry::init('OperationHour');
	}

	function endTest() {
		unset($this->OperationHour);
		ClassRegistry::flush();
	}

}
