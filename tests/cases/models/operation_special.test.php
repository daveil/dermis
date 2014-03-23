<?php
/* OperationSpecial Test cases generated on: 2014-03-23 15:38:54 : 1395560334*/
App::import('Model', 'OperationSpecial');

class OperationSpecialTestCase extends CakeTestCase {
	var $fixtures = array('app.operation_special');

	function startTest() {
		$this->OperationSpecial =& ClassRegistry::init('OperationSpecial');
	}

	function endTest() {
		unset($this->OperationSpecial);
		ClassRegistry::flush();
	}

}
