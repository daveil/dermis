<?php
/* Area Test cases generated on: 2014-03-23 15:09:27 : 1395558567*/
App::import('Model', 'Area');

class AreaTestCase extends CakeTestCase {
	var $fixtures = array('app.area', 'app.slot');

	function startTest() {
		$this->Area =& ClassRegistry::init('Area');
	}

	function endTest() {
		unset($this->Area);
		ClassRegistry::flush();
	}

}
