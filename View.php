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
	 * @return string
	 */
	protected function layout($data) {
		try {
			$content = $this->render('layout', $data);
		} catch (Exception $e) {
			$content = 'Layout render error: ' . $e->getMessage();
		}
		
		return $content;
	}
	
	public function days($data) {
		try {
			foreach ($data['days_list'] as &$day) {
				$day = $this->render('day_item', ['title' => implode('-', $day)]);
			}
			$data['days_list'] = implode($data['days_list']);
			$data['days_list'] = $this->render('days_list', $data);
			$body = $this->render('days', $data);
		} catch (Exception $e) {
			$body = 'Days render error: ' . $e->getMessage();
		}
		
		echo $this->layout([
			'body' => $body,
			'user' => $data['user'],
		]);
	}
	
	/**
	 * @param string $name
	 * @param array $data
	 * @return string
	 * @throws Exception
	 */
	protected function render($name, $data) {
		if (array_key_exists('file', $data)) throw new \Exception('key `file` not allowed into template data');
		
		extract($data);
		$file = "/html/{$name}.html";
		
		ob_start();
		include __DIR__ . $file;
		$ob_content = ob_get_contents();
		ob_end_clean();
		
		return $ob_content;
	}
	
}