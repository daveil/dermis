<?php
/* Statuses Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'Statuses');

class TestStatusesController extends StatusesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StatusesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.status', 'app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Statuses =& new TestStatusesController();
		$this->Statuses->constructClasses();
	}

	function endTest() {
		unset($this->Statuses);
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
