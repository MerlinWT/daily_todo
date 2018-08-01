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
	public function layout($data) {
		try {
			$content = $this->render('layout', $data);
		} catch (Exception $e) {
			$content = 'Layout render error: ' . $e->getMessage();
		}
		
		return $content;
	}
	
	/**
	 * @param string $name
	 * @param array $data
	 * @return string
	 */
	public function render($name, $data, $return = false) {
		try {
			if (array_key_exists('file', $data)) throw new \Exception('key `file` not allowed into template data');
			
			extract($data);
			$file = "/html/{$name}.php";
			
			ob_start();
			include __DIR__ . $file;
			$ob_content = ob_get_contents();
			ob_end_clean();
		} catch (\Exception $e) {
			$ob_content = "Template '{$name}' render error: {$e->getMessage()}";
		}
		
		if ($return) {
			return $ob_content;
		} else {
			echo $ob_content;
			return true;
		}
		
	}
	
	public function getDayTitle($year, $month, $day) {
		$month = str_pad($month, 2, '0', STR_PAD_LEFT);
		$day = str_pad($day, 2, '0', STR_PAD_LEFT);
		return "$year-$month-$day";
	}
	
	public function getDayId($year, $month, $day) {
		$month = str_pad($month, 2, '0', STR_PAD_LEFT);
		$day = str_pad($day, 2, '0', STR_PAD_LEFT);
		return "$year$month$day";
	}
	
}