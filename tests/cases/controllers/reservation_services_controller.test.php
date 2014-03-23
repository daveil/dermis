<?php
/* ReservationServices Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'ReservationServices');

class TestReservationServicesController extends ReservationServicesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReservationServicesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation_service', 'app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.status', 'app.reservation_product', 'app.product', 'app.service', 'app.employee');

	function startTest() {
		$this->ReservationServices =& new TestReservationServicesController();
		$this->ReservationServices->constructClasses();
	}

	function endTest() {
		unset($this->ReservationServices);
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
