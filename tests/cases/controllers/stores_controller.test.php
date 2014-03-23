<?php
/* Stores Test cases generated on: 2014-03-23 15:48:21 : 1395560901*/
App::import('Controller', 'Stores');

class TestStoresController extends StoresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StoresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.store');

	function startTest() {
		$this->Stores =& new TestStoresController();
		$this->Stores->constructClasses();
	}

	function endTest() {
		unset($this->Stores);
		ClassRegistry::flush();
	}

}
