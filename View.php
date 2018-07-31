<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 31.07.18
 * Time: 20:42
 */

class View
{
	/**
	 * @param array $data
	 */
	public function render($data) {
		extract($data);
		include __DIR__ . '/html/layout.html';
	}
}