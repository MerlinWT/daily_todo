<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 31.07.18
 * Time: 20:40
 */

class Model
{
	
	public function getData() {
		return [
			'days_list' => [
				['year' => 2018, 'month' => 1, 'day' => 1 ],
				['year' => 2018, 'month' => 1, 'day' => 2 ],
				['year' => 2018, 'month' => 1, 'day' => 3 ],
				['year' => 2018, 'month' => 1, 'day' => 4 ],
				['year' => 2018, 'month' => 1, 'day' => 5 ],
			],
			'content' => 'First, select a day'
		];
	}
	
}