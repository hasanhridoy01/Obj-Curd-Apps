
<?php require_once "vendor/autoload.php"; ?>
<?php 

   //Class User
   use App\Controller\Student;
   
   //Class Object/instance
   $student = new Student;

   //get id
   if ( isset($_GET['id']) ) {
     
     $id = $_GET['id'];

   }

   $single_data = $student -> showData($id);



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oop With full Curd Application</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    
   

    <div class="container">
    	<div class="row">
    		<div class="card mt-3 mx-auto shadow-lg">
    			<div class="card-header">
    				<h2>Data of: <?php echo $single_data['name'] ?></h2>
    				<a href="data.php" class="btn btn-sm btn-outline-info">View All Student</a>
    			</div>
    			<div class="card-body">
            <img class="shadow" src="media/photo/students/<?php echo $single_data['photo'] ?>" alt="" style="height: 200px; width: 200px; border-radius: 50%; display: block; margin: auto; border: 10px solid white; margin-bottom: 10px;">
            <h3 style="text-align: center; font-family: sans-serif;"><?php echo $single_data['name'] ?></h3>
            <table class="table">
              <tr>
                <td>name</td>
                <td><?php echo $single_data['name'] ?></td>
              </tr>
              <tr>
                <td>email</td>
                <td><?php echo $single_data['email'] ?></td>
              </tr>
              <tr>
                <td>cell</td>
                <td><?php echo $single_data['cell'] ?></td>
              </tr>
            </table>   
          </div>
    		</div>
    	</div>
    </div>
	
	<script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</body>
</html>