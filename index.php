<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	session_start([]);
	
	/**
	 * |------------------------------------------------------------------------------------|
	 * | we include a template manager, in order to identify where the user wants to enter
	 * |------------------------------------------------------------------------------------|
	 */
	include_once 'core/Kernel.php';
	require_once 'AutoLoader.php';
	$kernel = new Core\Kernel\Kernel();