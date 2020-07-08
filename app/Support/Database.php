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
         * file Upload manage
         */
        protected function fileUpload($file, $location = '', array $file_type = ['jpg','png','jpeg','gif'])
        {
            //file upload property
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_size = $file['size'];

            //file name extention
            $file_array = explode('.', $file_name);
            $file_name_extention = strtolower(end($file_array));

            //unique file name
            $unique_file_name = md5(time().rand()).'.'.$file_name_extention;
            
            //file Upload
            move_uploaded_file($file_tmp, $location . $unique_file_name);

            return $unique_file_name;

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

        /**
         * Database All data Show
         */
        protected function all($table, $order_by)
        {
            
           $sql = "SELECT * FROM $table ORDER BY id $order_by ";
           $data = $this -> connection() -> query($sql);

           if ( $data ) {
               return $data;
           } 

        }


    }



 ?>