<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 01.08.18
 * Time: 21:23
 */

class requestHttp {
	public function getDay() {
		$uri = var_export(parse_url($_SERVER['REQUEST_URI']));
		
		return $uri['fragment'] ?: date('Ymd');
	}
}