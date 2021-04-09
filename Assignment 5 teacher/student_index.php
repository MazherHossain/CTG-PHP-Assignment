<?php
include_once "autoload.php";
if(isset($_GET['delete_id'])){//delete data
	$delete_id = $_GET['delete_id'];
	$photo_name = $_GET['photo'];
	unlink('photos/'.$photo_name);
	delete('students',$delete_id);
	header("location:student_index.php");//solve the issue of re-adding the existing data after each reload
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Student's Data</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style3.css">
</head>
<body>
	
	<?php
		
		if(isset($_POST['crud'])){//Get Values from input
			$name = $_POST['name'];
			$email = $_POST['email'];
			$cell = $_POST['cell'];
			$username = $_POST['username'];
			$location = $_POST['location'];
			$age = $_POST['age'];
			$gender = $_POST['gender'];
			$department = $_POST['dept'];
			$cell_start = substr($cell, 0, 3);//cell manage
		
			//Form validation
			if(empty($name) || empty($email) || empty($cell) || empty($username) || empty($location) || empty($age) || empty($gender) || empty($department)){
				$msg = validate('All fields are required!');
				//warning for not entering any or all information
			}
			else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = validate('Invalid email address!');
			}
			else if(in_array($cell_start, ['017','018','019','015','013','016','014'])==false){
        $msg = validate('Invalid phone number sequence','warning');//Phone number validation warning
      }
			else if($age < 16 && $age>150){
        $msg = validate('You didnt follow the age requirement','warning');
			}
			else if(dataCheck('students','email',$email)==false){
				$msg = validate('Email already exists!','warning');
			}
			else if(dataCheck('students','username',$username)==false){
				$msg = validate('Username already exists!','warning');
			}
			else if(dataCheck('students','cell',$cell)==false){
				$msg = validate('Phone Number already exists!','warning');
			}
			else {
				//Upload profile photo
				$data = move($_FILES['photo'],'photos/');
				$unique_name = $data['unique_name'];
				$err_msg = $data['err_msg'];
				if(empty($err_msg)){
					//Data insert
				create("INSERT INTO students(name, email, cell, username, location, age, gender, dept, photo) VALUES ('$name','$email','$cell','$username','$location','$age','$gender','$department','$unique_name')");
				$msg = validate('Data inserted!','success');//Success
				}else{
					$msg = $err_msg;
				}
				header('location:student_index.php');
				
			}
		}
	?>
	

	<div class="wrap-table w-100 p-3">
	<button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#student_modal">
  Add Student
</button>
<a class="btn btn-outline-primary" href="mainpage.php">Back</a>
<br><br>
		<div class="card shadow">
		<?php
			if(isset($msg)){
				echo $msg;
			}
		?>
		<div class="card-shadow">	
			<div class="card-body input-group">
				<form class="input-group" action="" method="POST">
					<h2 class="me-3">All Data</h2>
					<input name="search" type="search" class="form-control" placeholder="Search">
					<button name="searchbtn" class="btn btn-outline-primary" type="submit">Search</button>
				</form>
			</div>
				<table class="table table-success table-striped text-success">
					<thead>
						<tr>
							<th ></th>
							<th class="col-sm-1">Name</th>
							<th class="col-sm-2">Email</th>
							<th class="col-sm-1">Cell</th>
							<th class="col-sm-2">User Name</th>
							<th class=primary">Age</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$data= all('students');
						if(isset($_POST['searchbtn'])){
							$search = $_POST['search'];
							$sql="SELECT * FROM students WHERE name LIKE '%$search%' OR cell LIKE '%$search%' OR username LIKE '%$search%' OR location='$search'";
							$data = connect()->query($sql);
						}
						$i = 1;
						while($student = $data->fetch_object()):
						?>
						<tr>
							<td><?php echo $i; $i++; ?></td>
							<td><?php echo $student->name; ?></td>
							<td><?php echo $student->email; ?></td>
							<td><?php echo $student->cell; ?></td>
							<td><?php echo $student->username; ?></td>
							<td><?php echo $student->age; ?></td>
							<td><img width="80" src="photos/<?php echo $student->photo; ?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-primary" href="student_show.php?show_id=<?php echo $student->id?>">View</a>
								<a class="btn btn-sm btn-warning" href="student_edit.php?edit_id=<?php echo $student->id?>">Edit</a>
								<a class="btn btn-sm btn-danger delete_btn" href="?delete_id=<?php echo $student->id?>&photo=<?php echo $student->photo?>">Delete</a>
							</td>
						</tr>
						<?php endwhile; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<!--Teacher modal-->
	
	<div class="modal fade" id="student_modal" tabindex="-1" aria-labelledby="student_modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
				<h3 class="modal-title" id="add_teacher_modal">Add New Student</h3>
				</div>
				<div class="modal-body">
					<form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Student Name</label>
							<input name="name" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Email</label>
							<input name="email" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Phone Number</label>
							<input name="cell" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">User Name</label>
							<input name="username" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Location</label>
							<select class="form-select" aria-label=".form-select-sm example" name="location" id="">
								<option value="">-Location-</option>
								<option value="Mirpur">Mirpur</option>
								<option value="Banani">Banani</option>
								<option value="Badda">Badda</option>
								<option value="Uttara">Uttara</option>
								<option value="Mohammadpur">Mohammadpur</option>
								<option value="Bashundhara">Bashundhara</option>
								<option value="Gulshan">Gulshan</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<label for="">Age</label>
							<input name="age" class="form-control" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Gender</label>
							<input name="gender" type="radio" checked value="Male" id="Male"><label for="Male">Male</label>
							<input name="gender" type="radio" value="Female" id="Female"><label for="Female">Female</label>
						</div>
						<div class="form-group mt-2">
							<label for="">Department</label>
							<select class="form-select" aria-label=".form-select-sm example" name="dept" id="">
								<option value="">-Department-</option>
								<option value="BBA">BBA</option>
								<option value="EEE">EEE</option>
								<option value="CSE">CSE</option>
								<option value="Economics">Economics</option>
								<option value="English">English</option>
								<option value="Law">Law</option>
								<option value="Architecture">Architecture</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<label for="student_photo" <div style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i> <img style="width: 100px;" id="preview" src="" alt=""></div>Student Photo</label>
							<input name="photo"style="display:none;" class="form-control" type="file" id="student_photo">
						</div>
						<div class="form-group mt-2 mb-2 mx-auto">
							<label for=""></label>
							<input name="crud" class="btn btn-primary" type="submit" value="add student">
						</div>
					</form>
				</div>
				</div>
				<div class="modal-footer"></div>
			</div>
		</div>
  </div>



	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/script.js"></script>
	<script>
	$('.delete_btn').click(function(){
      let conf = confirm('Are you sure?');
			if(conf==true){
				return true;
			}
			else{
				return false;
			}
    });
	</script>
</body>
</html>