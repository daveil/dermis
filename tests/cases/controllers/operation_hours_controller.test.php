<?php
/* OperationHours Test cases generated on: 2014-03-23 15:39:04 : 1395560344*/
App::import('Controller', 'OperationHours');

class TestOperationHoursController extends OperationHoursController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OperationHoursControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_hour');

	function startTest() {
		$this->OperationHours =& new TestOperationHoursController();
		$this->OperationHours->constructClasses();
	}

	function endTest() {
		unset($this->OperationHours);
		ClassRegistry::flush();
	}

}
