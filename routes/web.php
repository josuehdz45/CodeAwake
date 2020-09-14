<?php
	use Core\App\App;
	
	/**
	 * Declara las rutas cortas que usaras para este proyecto
	 * 
     * @author CodeAwake
     * @package routes
     */
	$router = new Router\Router();

    /**
	 * Index route - Mostramos una vista cuando se entre a esta ruta
	 * @param string PATH
	 * @param callback VIEW OR QUERY
     */
    $router->get("/", function(){
		App::getView("index");
    });

    /**
	 * Obtenemos un valor especifico de una ruta
	 * 
	 * @param string PATH
	 * @param callback VIEW OR QUERY RETURN A VALUE
     */
    $router->add('/user/([0-9]+)', function($user_id) {
		// Your code...
    });    

    /**
	 * Ruta que especifica que no existe una ruta
	 * 
	 * @param string PATH
	 * @param callback VIEW OR QUERY
     */
    $router->get('/(.*)', function(){
		App::getView("404");
    });
	
	// Execute the routes
    $router->route();