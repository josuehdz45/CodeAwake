<?php
	/**
	 * Declara las rutas cortas que usaras para este proyecto y incluye
     * tus modelos que usaras para el trafico de datos
	 * 
     * @author CodeAwake
     * @package routes
     */
	use Core\App\App;
	$router = new Router\Router();

    /**
	 * Usamos el metodo get para mandar datos a un cliente
	 * @param string PATH
	 * @param callback VIEW OR QUERY
     */
    $router->get("/", function(){
		// Add your model instance
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
	 * Usamos el motodo post para recibir información de un cliente
	 * 
	 * @param string PATH
	 * @param callback
     */
    $router->post('/login', function() {
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