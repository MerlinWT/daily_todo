<?php
/**
 * Created by PhpStorm.
 * User: kov
 * Date: 31.07.18
 * Time: 20:40
 */

class Model
{
	private $day;
	
	private $days_tasks = [
		20180101 => [
			['id' => 1, 'title' => 'task 1'],
		],
		20180102 => [
			['id' => 2, 'title' => 'task 2'],
			['id' => 3, 'title' => 'task 3'],
		],
		20180103 => [
			['id' => 4, 'title' => 'task 4'],
		],
		20180104 => [
			['id' => 5, 'title' => 'task 5'],
		],
		20180105 => [
			['id' => 6, 'title' => 'task 6'],
		],
	];
	
	public function __construct($day) {
		$this->day = $day;
	}
	
	public function getData() {
		return [
			'days_list' => [
				['id' => 20180101, 'title' => '2018-01-01'],
				['id' => 20180102, 'title' => '2018-01-02'],
				['id' => 20180103, 'title' => '2018-01-03'],
				['id' => 20180104, 'title' => '2018-01-04'],
				['id' => 20180105, 'title' => '2018-01-05'],
			],
			'day_content' => [
				'id' => $this->day,
				'tasks_list' => array_key_exists($this->day, $this->days_tasks) ? $this->days_tasks[$this->day] : [],
			],
		];
	}
	
}