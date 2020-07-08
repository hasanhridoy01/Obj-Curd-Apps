<?php 
    
    namespace App\Support;

    use mysqli;

    /**
     * Database Connection Manage
     */
    abstract class Database
    {
        /**
         * Server related Property
         */
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'oop curd';
        private $connection;
    	
        /**
         * Database Connection SetUp
         */
    	private function connection()
    	{
    		
          return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);

    	}
    	
    }



 ?>