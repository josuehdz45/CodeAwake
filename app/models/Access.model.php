<?php	
	namespace App\Models\Access;
	use Core\App\App;
	use Core\Managment\Managment;
	/**
	 * This is an example the a controller
	 * 
	 * @author Your Name <Mail@example.com>
	 * @package models
	 */
	class Access extends Managment{

		// Default access
		private $default_access = [
			"user" => "admin",
			"pass" => "admin"
		];

		function __construct(){
			// Your Code...
		}

		public function login() : string{
			return (string) "Algo nuevo esta por comenzar :)";
		}
	}