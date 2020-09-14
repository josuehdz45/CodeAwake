<?php
	use Core\Kernel\Kernel;
	use Core\App\App as App;
	
	/**
	 * +----------------------------------+
	 * | Init a new view	        	  |
	 * +----------------------------------+
	 */
	App::initView(function($template){
		$template->assign([
			'server' => App::server(),
			'pageTitle' => 'Forbidden',
			'body' => "This page was not found, I'm sorry"
		]);
		$template->display('404.tpl');
	});