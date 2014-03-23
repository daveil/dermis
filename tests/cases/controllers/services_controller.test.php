<?php
/* Services Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'Services');

class TestServicesController extends ServicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ServicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.service', 'app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.employee');

	function startTest() {
		$this->Services =& new TestServicesController();
		$this->Services->constructClasses();
	}

	function endTest() {
		unset($this->Services);
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
