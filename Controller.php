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
		
		$view->days($model->getData());
	}
}