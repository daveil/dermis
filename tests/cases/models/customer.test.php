<?php
/* Customer Test cases generated on: 2014-03-23 15:09:27 : 1395558567*/
App::import('Model', 'Customer');

class CustomerTestCase extends CakeTestCase {
	var $fixtures = array('app.customer', 'app.reservation');

	function startTest() {
		$this->Customer =& ClassRegistry::init('Customer');
	}

	function endTest() {
		unset($this->Customer);
		ClassRegistry::flush();
	}

}
