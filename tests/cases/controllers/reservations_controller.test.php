<?php
/* Reservations Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'Reservations');

class TestReservationsController extends ReservationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReservationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.status', 'app.reservation_product', 'app.product', 'app.reservation_service', 'app.service', 'app.employee');

	function startTest() {
		$this->Reservations =& new TestReservationsController();
		$this->Reservations->constructClasses();
	}

	function endTest() {
		unset($this->Reservations);
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
