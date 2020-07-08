
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
	<div class="container">
		<div class="row">
			<div class="card mt-2 mx-auto shadow-lg">
				<div class="card-header">
					<h2>View all Student</h2>
					<a href="index.php" class="btn btn-sm btn-outline-success">Add Student</a>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Sl</th>
								<th>Name</th>
								<th>Email</th>
								<th>Cell</th>
								<th>Photo</th>
								<th>Active</th>
							</tr>
						</thead>
						<tbody>
							<?php 

                               $all_data = $student -> allStudent();
                               
                               $i = 1;
                               while( $student_data = $all_data -> fetch_assoc()):

							 ?>
							<tr>
								<td><?php echo $i; $i++; ?></td>
								<td><?php echo $student_data['name'] ?></td>
								<td><?php echo $student_data['email'] ?></td>
								<td><?php echo $student_data['cell'] ?></td>
								<td>
									<img src="media/photo/students/<?php echo $student_data['photo'] ?>" alt="" style="height: 80px; width: 120px;">
								</td>
								<td>
									<a href="" class="btn btn-sm btn-info">View</a>
									<a href="" class="btn btn-sm btn-success">Edit</a>
									<a href="" class="btn btn-sm btn-danger">Delete</a>
								</td>
							</tr>
							<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	  
	<script src="bootstrap-4.3.1-dist/js/bootstrap.js"></script>
</body>
</html>