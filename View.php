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
			$content = $this->templateHtml('layout', $data);
		} catch (Exception $e) {
			$content = 'Layout render error: ' . $e->getMessage();
		}
		
		return $content;
	}
	
	public function days($data) {
		extract($data);
		
		try {
			$body = $this->templateHtml('days', [
				'days' => '1,2,3,4',
				'content' => 'First, select day'
			]);
		} catch (Exception $e) {
			$body = 'Days render error: ' . $e->getMessage();
		}
		
		echo $this->layout([
			'body' => $body
		]);
	}
	
	/**
	 * @param string $name
	 * @param array $data
	 * @return string
	 * @throws Exception
	 */
	protected function templateHtml($name, $data) {
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