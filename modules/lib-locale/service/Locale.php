<?php
/**
 * locale service
 * @package lib-locale
 * @version 0.0.1
 * @upgrade true
 */

namespace LibLocale\Service;

class Locale {

	private $keys;

	public function translate($key, $params=null){
		if(is_null($this->keys))
			$this->set();
		if(!isset($this->keys[$key]))
			return trigger_error('Translation for key `' . $key . '` not found');
		$trans = $this->keys[$key];
		if(!$params)
			return $trans;

		$params = (array)$params;

		uksort($params, function($a,$b){
            return strcasecmp($b, $a);
        });

        foreach($params as $key => $val)
            $trans = str_replace(':' . $key, $val, $trans);

        return $trans;
	}

	public function set($locale=null){
		if(!$locale)
			$locale = \Phun::$dispatcher->config->libLocale['default'] ?? 'en-US';
		
		$locale_file = BASEPATH . '/etc/locale/' . $locale . '.php';
		if(!is_file($locale_file))
			return trigger_error('Locale named `' . $locale . '` not found');
		$this->keys = include $locale_file;
	}
}