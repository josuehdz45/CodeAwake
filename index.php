<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start([
		// Your session config
	]);
	
	/**
	 * Include a template manager, in order to identify where the user wants to enter
	 */
	require_once 'core/Kernel.php';
	require_once 'AutoLoader.php';
	$kernel = new Core\Kernel\Kernel();