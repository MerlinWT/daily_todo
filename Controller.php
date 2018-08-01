<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 31.07.18
 * Time: 20:42
 */

class Controller
{
	public function indexAction($day) {
		$model = new \Model($day);
		$view = new \View();
		
		$data = $model->getData();
		$view->layout([
			'body' => $view->render('days', $data, true)
		]);
	}
}