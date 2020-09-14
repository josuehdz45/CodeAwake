<?php
    namespace Core\Controller;

    /**
     * |-------------------------------------|
     * | Controlador de plantillas
     * |-------------------------------------|
     * @author Josué Hernández <josuerogramer@gmail.com>
     * @package core
     */
    class Controller{
        /**
         * |-----------------------------------------------------------|
         * | Contiene una instancia de el controlador de templates
         * |-----------------------------------------------------------|
         * @var object
         */
        public $tpml_control;

        /**
         * |-------------------------------|
         * | Instanciamos la clase smarty
         * |-------------------------------|
         */
        function __construct(){
            $this->tpml_control = new \Smarty();
        }

        /**
         * |----------------------------------------------------------------|
         * | Creamos el metodo que retornara el controladdor de platillas
         * |----------------------------------------------------------------|
         */
        final public function view($callback){
            if(is_callable($callback)){
                \call_user_func($callback, $this->tpml_control);
            }else{
                print("Lo siento, pero nesecitas una funcion anonima que obtenga el controlador de plantillas.");
            }
        }
    }