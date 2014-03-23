<?php
/* Employee Test cases generated on: 2014-03-23 15:09:27 : 1395558567*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.reservation_service');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
