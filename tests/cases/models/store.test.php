<?php
/* Store Test cases generated on: 2014-03-23 15:48:14 : 1395560894*/
App::import('Model', 'Store');

class StoreTestCase extends CakeTestCase {
	var $fixtures = array('app.store');

	function startTest() {
		$this->Store =& ClassRegistry::init('Store');
	}

	function endTest() {
		unset($this->Store);
		ClassRegistry::flush();
	}

}
