<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 31.07.18
 * Time: 20:42
 */

class Controller
{
	public function indexAction() {
		$model = new \Model();
		$view = new \View();
		
		$data = $model->getData();
		$data['user'] = $_SERVER['PHP_AUTH_USER'];
		$view->days($model->getData());
	}
}