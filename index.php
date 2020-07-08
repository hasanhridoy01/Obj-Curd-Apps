
<?php include_once "vendor/autoload.php"; ?>
<?php 
    
    use App\Controller\Student;

    $student = new Student;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oop With full Curd Application</title>
	<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
</head>
<body>
    
    <?php 

       if ( isset($_POST['submit']) ) {
           
           //Get value manage
           echo $name = $_POST['name'];
           echo $email = $_POST['email'];
           echo $cell = $_POST['cell'];

           //file manage
           $photo = $_FILES['photo'];

       }

     ?>

    <div class="container">
    	<div class="row">
    		<div class="card mt-3 mx-auto shadow-lg">
    			<div class="card-header">
    				<h2>Sign Up</h2>
    				<a href="data.php" class="btn btn-sm btn-outline-info">View All Student</a>
    			</div>
    			<div class="card-body">
    				<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
    					
    					<label for="">Name</label>
    					<input type="text" class="form-control" placeholder="Enter Your Name" name="name">

    					<label for="">E_mail</label>
    					<input type="text" class="form-control" placeholder="Enter Your Email" name="email">

    					<label for="">Cell</label>
    					<input type="text" class="form-control" placeholder="Enter Your Cell" name="cell">

    					<label for="">Photo</label>
    					<input type="file" class="form-control" name="photo">
    					<br>

    					<input type="submit" class="btn btn-outline-info mt-2" value="Submit" name="submit">

    				</form>
    			</div>
    		</div>
    	</div>
    </div>
	
	<script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</body>
</html>