<?php
    namespace Core\App;

    /**
     * +----------------------------+
     * | Clase general para acceder |
     * +----------------------------+
     * 
     * @author Josué Hernández
     * @license MIT
     */
    class App{

        /**
         * Constructor
         * 
         * @return void
         */
        function __construct(){
            // Write your code 
        }
        
        /**
         * Inicializa smarty mediante un callback
         * 
         * @access public
         * @param callable $callback
         * @return void
         */
        public static function initView($callback) : void{
            \call_user_func($callback, new \Smarty());
        }

        /**
         * Retornamos la clase pedida desde el metodo
         * 
         * @access public 
         * @param string $route
         * @param array $params
         * @return void
         */
        public static function getView(string $route = '/') : void{
            try{
                if(!file_exists("app/controllers/{$route}.controller.php")){
                    throw new \Exception("Fatal Error: No existe la vista, ingresa una vista valida");
                }else{
                    include_once "app/controllers/{$route}.controller.php";
                }
            }catch(Exception $e){
                print($e->getMessage());
            }
        }

        /**
         * Verificamos si existe una sessión var activa
         * 
         * @return bool
         */
        public static function session() : bool{
            return ($_SESSION) ? true : false;
        }

        /**
         * Obtenemos el nombre y tipo de seguridad del servidor
         * 
         * @access public
         * @return String
         */
        public static function server() : string{
            $host = (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) ? 'https://' : 'http://';
            return (string) $host .= $_SERVER['HTTP_HOST']; 
        }

        /**
         * Usamos la instancia que se hizo del framework 
         * Medoo para utilizarlo de forma global en la app
         * 
         * @return mixed
         */
        public static function database(){
            include 'config/db/database.php';
            return new \Medoo\Medoo($data_config);
        }
    }