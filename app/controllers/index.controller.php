<?php
	use Core\Kernel\Kernel;
	use Core\App\App as App; 
	use App\Models\Access\Access as Access;
	/**
	 * +----------------------------------+
	 * | Init a new view	        	  |
	 * +----------------------------------+
	 */
	App::initView(function($template){
		$login = new Access();
		$template->assign([
			'server' => App::server(),
			'pageTitle' => 'Start app',
			'body' => $login->login()
		]);
		$template->display('index.tpl');
	});
