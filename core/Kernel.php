<?php
    namespace Core\Kernel;
    /**
     * |------------------------------|
     * | Base general del framework
     * |------------------------------|
     * @author Josué Hernández <josueprogramer@gmail.com>
     * @package core
     */
    class Kernel{

        /**
         * |-----------------------------------------|
         * | Contiene el host y la seguridad
         * |-----------------------------------------|
         * @access private
         * @var String $host
         */
        private $host;

        /**
         * |---------------------------------------|
         * | Contiene el actual controlador
         * |---------------------------------------|
         * @var string $controller
         */
        private $controller;

        /**
         * |----------------------------------------------|
         * | Obtenemos el nombre y tipo de seguridad del servidor
         * |----------------------------------------------|
         * @access public
         * @return String
         */
        public function server_get() : string{
            $this->host = (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) ? 'https://' : 'http://';
            return (string) $this->host .= $_SERVER['HTTP_HOST']; 
        }

        /**
         * |---------------------------------------|
         * | Añadir un nuevo controller a la vita 
         * | actual.
         * |---------------------------------------|
         * @access public
         * @return void
         */
        public function add_controller($controller = "index") : void{
            $controller = (!is_null($controller)) ? $controller : "index";
            include $this->controller = (file_exists('app/routes/'.$controller.'.view.php')) ? 'app/routes/'.$controller.'.view.php' : 'app/routes/404.sirius.php';
        }
        
        /**
         * |-------------------------------------------|
         * | Obtener el nombre del controller actual
         * |------------------------------------------|
         * @return string
         */
        public function get_actual_file() : string{    
            return (string) $this->controller;
        }

        /**
         * Incluir archivos Dinamicamente
         * 
         * @param array $filenames
         * @return void
         */
        public static function autoload($filenames = []) : void{
            foreach($filenames as $key){
                try{
                    if(\file_exists($key)){
                        require_once "{$key}";
                    }
                    else{
                        throw new \Exception("The file not exist - File route: ".$key);
                    }
                }catch(\Exception $e){
                    print("You have an error: ".$e->getMessage());
                }
            }
        }

        /**
         * Incluir los controladore
         * 
         * @param string document
         * @return void
         */
        public static function autoload_models($document = '') : void{
            $json = file_get_contents($document);
            $jsonIterator = new \RecursiveIteratorIterator( new \RecursiveArrayIterator(json_decode($json, TRUE)), \RecursiveIteratorIterator::SELF_FIRST);
            foreach ($jsonIterator as $key => $val) {
                if(!is_array($val)) {
                    require_once "app/models/{$val}";
                }
            }            
        } 
    }