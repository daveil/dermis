<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {
	function beforeFilter(){
		App::Import('Model','Store');
		$this->Store =  new Store();
		$_STORE =  $this->Store->findById(1);
		
		//Define Globals
		define('STORE_NAME',$_STORE['Store']['name']);
		define('STORE_LOCATION',$_STORE['Store']['location']);
		define('TIME_SLOT_SIZE',$_STORE['Store']['time_slot_size']);
		//Define OperatioHour
		define('MONDAY',6); //SET OperationHour on Monday
		define('TODAY','March 24, 2014 '); //SET Date today
		//Prepare Opening time values
		define('OPEN_TIME', TODAY.$_STORE['OperationHour'][MONDAY]['open_time']);
		define('OPEN_MICROTIME',strtotime(OPEN_TIME));
		//Prepare Closing time values
		define('CLOSE_TIME',TODAY.$_STORE['OperationHour'][MONDAY]['close_time']);
		define('CLOSE_MICROTIME',strtotime(CLOSE_TIME));
		//
		define('TIME_SLOT_STEP',strtotime(OPEN_TIME. '+'.TIME_SLOT_SIZE.'minutes')-OPEN_MICROTIME);
		
	}
}
