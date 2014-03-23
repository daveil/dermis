<?php
/* Slots Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'Slots');

class TestSlotsController extends SlotsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SlotsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.slot', 'app.area', 'app.reservation', 'app.customer', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Slots =& new TestSlotsController();
		$this->Slots->constructClasses();
	}

	function endTest() {
		unset($this->Slots);
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
