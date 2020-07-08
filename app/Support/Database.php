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

        /**
         * Student Data SetUp
         */
    	protected function insert($table, array $data)
        {
          
          //Get Sql Colmun manage
          $array_key = array_keys($data);
          $array_col = implode(',', $array_key);

          //Get Sql Values manage
          $array_val = array_values($data);
          foreach ($array_val as $value) {
              $form_data[] = "'".$value."'";
          }
          $array_value = implode(',', $form_data);
          
           $sql = "INSERT INTO $table ($array_col) VALUES ($array_value)";
           $query = $this -> connection() -> query($sql);

           if ( $query ) {
               return $query;
           }

        }

    }



 ?>