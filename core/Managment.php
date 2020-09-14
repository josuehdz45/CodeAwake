<?php
    namespace Core\Managment;
    use Medoo\Medoo;
    /**
     * +---------------------------------+
     * | Conectams todos los vendors que |
     * | neseciten una instancia         |
     * +---------------------------------+
     * @access public 
     * @author Josué Hernández
     */
    class Managment{
        
        public $db;

        function __construct(){
            global $data_config;
            $this->db = new Medoo($data_config);
        }
    }
    