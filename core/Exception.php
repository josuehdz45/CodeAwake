<?php
    namespace Core\Error;
    /**
     * |---------------------------------------|
     * | Controlador personalizado de errores
     * |--------------------------------------|
     * @author Josué Hernández <josueprogramer@gmail.com>
     */
    class Error extends \Exception{        

        // Redefinimos la exepcion
        public function __construct($message = "You have an error", $code = 0, Exception $previous = null){
            parent::__construct($message, $code, $previous);
            if (!is_null($previous)){
                $this->previous = $previous;
            }
        }

        /**
         * |-------------------------------------|
         * | Imprimimos el mensaje personalizado
         * |-------------------------------------|
         * @return string
         */
        final public function error_get() : string{
            return (string) ($this->code != 0) ? "[<b>{$this->code}</b>]: ".$this->message : $this->message;
        }

        /**
         * |---------------------------------|
         * | Execepcion anterior
         * |---------------------------------|
         * @return string
         */
        final public function prevent_get() : string{
            return (string) $this->previous;
        }
    }