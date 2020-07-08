<?php 
    
    namespace App\Controller;

    use App\Support\Database;

    /**
     * Student Data Manage
     */
    class Student extends Database
    {
    	
        /**
         * Database data send mehtod
         */
    	public function addNewStudent($name, $email, $cell, $photo)
    	{
    	  
          //Database Data Send
          $data = $this -> insert('student', [

              'name' => $name,
              'email' => $email,
              'cell' => $cell,
              'photo' => $this -> fileUpload($photo, 'media/photo/students/'),

          ]);
        
          //comfermation massage
          if ( $data ) {
              return "<p class=\" alert alert-success \"> Student Added SuccessFull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
          }

    	}

        /**
         * Database Data recive
         */
    	public function allStudent()
        {
            
            $data = $this -> all('student', 'DESC');

            return $data;

        }

        /**
         * Delete Single Data
         */
        public function deleteData($id)
        {
            
            $data = $this -> delete('student', $id);

            if ( $data ) {
                
               return "<p class=\" alert alert-danger \"> Student Deleted SuccessFull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";;

            }

        }

        /**
         * Show All Single Data
         */
        public function showData($id)
        {
            
            $data = $this -> find('student', $id);

            return $data -> fetch_assoc();

        }

    }


 ?>