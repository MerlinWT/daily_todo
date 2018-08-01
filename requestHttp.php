<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 01.08.18
 * Time: 21:23
 */

class requestHttp {
	public function getDay() {
		$uri = parse_url($_SERVER['REQUEST_URI']);
		$uri['path'] = explode('/', $uri['path']);
		
		return $uri['path'][2] ?: date('Ymd');
	}
}