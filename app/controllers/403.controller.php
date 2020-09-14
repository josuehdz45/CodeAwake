<?php
	use Core\Kernel\Kernel;
	/**
	 * Este documente entrelaza la vista con un modelo
	 * 
	 * @author Josué Hernández
	 * @package routes
	 */

	// Instacia de la clase Controller
	$controller = new Core\Controller\Controller();
	
	// Este metodo permite asignar una view al controlador
	$controller->view(function($template){
		/** Se añaden las variables que podran ser usadas en tu vista */
		$template->assign([		
			'server' => server(),
			'pageTitle' => 'Forbidden',
		]);
		$template->display('403.tpl');
	});