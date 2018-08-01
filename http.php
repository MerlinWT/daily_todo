<?php

	include_once 'Controller.php';
	include_once 'Model.php';
	include_once 'View.php';
	include_once 'requestHttp.php';
	
	$request = new requestHttp();
	
	$controller = new \Controller();
	$controller->indexAction(
		$request->getDay()
	);