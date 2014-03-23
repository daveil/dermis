<?php
/* ReservationProducts Test cases generated on: 2014-03-23 15:09:38 : 1395558578*/
App::import('Controller', 'ReservationProducts');

class TestReservationProductsController extends ReservationProductsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ReservationProductsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.reservation_product', 'app.reservation', 'app.customer', 'app.slot', 'app.area', 'app.status', 'app.reservation_service', 'app.service', 'app.employee', 'app.product');

	function startTest() {
		$this->ReservationProducts =& new TestReservationProductsController();
		$this->ReservationProducts->constructClasses();
	}

	function endTest() {
		unset($this->ReservationProducts);
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
