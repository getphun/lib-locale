<?php 
/**
 * Locale helper 
 * @package lib-locale
 * @version 0.0.1
 * @upgrade true
 */

function lang($key, $params=null){
	return \Phun::$dispatcher->locale->translate($key, $params);
}