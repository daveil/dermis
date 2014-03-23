<?php
/* Areas Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'Areas');

class TestAreasController extends AreasController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AreasControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.area', 'app.slot', 'app.reservation', 'app.customer', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Areas =& new TestAreasController();
		$this->Areas->constructClasses();
	}

	function endTest() {
		unset($this->Areas);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
