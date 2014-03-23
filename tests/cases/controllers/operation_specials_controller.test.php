<?php
/* OperationSpecials Test cases generated on: 2014-03-23 15:39:17 : 1395560357*/
App::import('Controller', 'OperationSpecials');

class TestOperationSpecialsController extends OperationSpecialsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OperationSpecialsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_special');

	function startTest() {
		$this->OperationSpecials =& new TestOperationSpecialsController();
		$this->OperationSpecials->constructClasses();
	}

	function endTest() {
		unset($this->OperationSpecials);
		ClassRegistry::flush();
	}

}
