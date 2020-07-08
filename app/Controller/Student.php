<?php 
    
    namespace App\Controller;

    use App\Support\Database;

    /**
     * Student Data Manage
     */
    class Student extends Database
    {
    	
    	public function addNewStudent($name, $email, $cell, $photo)
    	{
    		
          $data = $this -> insert('student', [

              'name' => $name,
              'email' => $email,
              'cell' => $cell,

          ]);

          if ( $data ) {
              return "<p class=\" alert alert-success \"> Student Added SuccessFull ! <button class=\"close\" data-dismiss=\"alert\">&times;</button></p>";
          }

    	}
    	
    }


 ?>