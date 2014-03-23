<?php
/* Product Test cases generated on: 2014-03-23 15:09:28 : 1395558568*/
App::import('Model', 'Product');

class ProductTestCase extends CakeTestCase {
	var $fixtures = array('app.product', 'app.reservation', 'app.reservation_product');

	function startTest() {
		$this->Product =& ClassRegistry::init('Product');
	}

	function endTest() {
		unset($this->Product);
		ClassRegistry::flush();
	}

}
