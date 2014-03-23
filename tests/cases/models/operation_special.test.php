<?php
/* OperationSpecial Test cases generated on: 2014-03-23 16:06:01 : 1395561961*/
App::import('Model', 'OperationSpecial');

class OperationSpecialTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_special', 'app.store');

	function startTest() {
		$this->OperationSpecial =& ClassRegistry::init('OperationSpecial');
	}

	function endTest() {
		unset($this->OperationSpecial);
		ClassRegistry::flush();
	}

}
