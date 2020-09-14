<?php
    use Core\Kernel\Kernel;
    /**
     * Here are all the fundamental files for the framework to work...
     * 
     * @author Josué Hernández <josueprogramer@gmail.com>
     * @license MIT
     */
    define("DEFAULT_DIR", __DIR__);
    
    $kernel = new Core\Kernel\Kernel();
    // General files
    $kernel->autoload([
        DEFAULT_DIR."/config/db/database.php",
        DEFAULT_DIR."/vendor/smarty/Smarty.class.php",
        DEFAULT_DIR."/vendor/medoo/src/Medoo.php",
        DEFAULT_DIR."/vendor/php-router/src/php-5.3-support.php",
        DEFAULT_DIR."/vendor/php-router/src/Router/Router.php",
        DEFAULT_DIR."/vendor/php-router/src/Router/Route.php",
        DEFAULT_DIR."/vendor/php-router/src/Router/RouteNotFoundException.php",
        DEFAULT_DIR."/core/Exception.php",
        DEFAULT_DIR."/core/Controller.php",
        DEFAULT_DIR."/core/App.php",
        DEFAULT_DIR."/core/Managment.php",
    ]);

    // Models files
    $kernel->autoload_models(DEFAULT_DIR."/models.json");

    $kernel->autoload([
        DEFAULT_DIR."/routes/web.php",
    ]);