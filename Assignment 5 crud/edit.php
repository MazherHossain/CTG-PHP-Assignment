<?php
include_once "autoload.php";

if(isset($_POST['crud'])){//Get Values from input
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cell = $_POST['cell'];
  $username = $_POST['username'];
  $location = $_POST['location'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $department = $_POST['dept'];
  $id = $_GET['edit_id'];
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
  else {
    //Upload profile photo
    //$data = move($_FILES['new_photo'],'photos/');
    //$unique_name = $data['unique_name'];
    //$err_msg = $data['err_msg'];

    if(!empty($_FILES['new_photo']['name'])){
      $data= move($_FILES['new_photo'],'photos/');
      $photo_name = $data['unique_name'];
      unlink('photos/'.$_POST['old_photo']);
    }else{
      $photo_name = $_POST['old_photo'];
    }
    $updated_at=date('Y-m-d g:i:h', time());
    update("UPDATE teachers SET name='$name',email='$email',cell='$cell',username='$username',location='$location', age='$age',gender='$gender',dept='$department',photo='$photo_name', updated_at='$updated_at' WHERE id='$id'");
    header('location:index.php');
    //$msg = validate('Data updated successfully','success');
  }
}

if(isset($_GET['edit_id'])){
  $id = $_GET['edit_id'];
  $edit_data = find('teachers',$id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data</title>
  <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-6 mx-auto mt-5">
    <a class="btn btn-primary btn-sm mb-2" href="index.php">Back</a>
      <div class="card">
        <div class="card-body">
        <h2>Teacher Data Edit</h2>
        <?php
        if(isset($msg)){
          echo $msg;
        }
        ?>
        <hr>
        <form action="" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label for="">Teacher Name</label>
							<input name="name" class="form-control" value="<?php echo $edit_data->name; ?>" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Email</label>
							<input name="email" class="form-control" value="<?php echo $edit_data->email; ?>" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Phone Number</label>
							<input name="cell" class="form-control" value="<?php echo $edit_data->cell; ?>" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">User Name</label>
							<input name="username" class="form-control" value="<?php echo $edit_data->username; ?>" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Location</label>
							<select class="form-select" aria-label=".form-select-sm example" name="location" id="">
								<option value="">-select-</op>
								<option <?php
                echo ($edit_data->location=='Mirpur') ? 'selected':''; ?>  value="Mirpur">Mirpur</option>
								<option <?php
                echo ($edit_data->location=='Banani') ? 'selected':''; ?> value="Banani">Banani</option>
								<option <?php
                echo ($edit_data->location=='Badda') ? 'selected':''; ?> value="Mirpur">Badda</option>
								<option <?php
                echo ($edit_data->location=='Uttara') ? 'selected':''; ?> value="Uttara">Uttara</option>
								<option <?php
                echo ($edit_data->location=='Mohammadpur') ? 'selected':''; ?> value="Mohammadpur">Mohammadpur</option>
								<option <?php
                echo ($edit_data->location=='Bashundhara') ? 'selected':''; ?> value="Bashundhara">Bashundhara</option>
								<option <?php
                echo ($edit_data->location=='Gulshan') ? 'selected':''; ?> value="Gulshan">Gulshan</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<label for="">Age</label>
							<input name="age" class="form-control" value="<?php echo $edit_data->age; ?>" type="text">
						</div>
						<div class="form-group mt-2">
							<label for="">Gender</label>
							<input name="gender" type="radio" <?php
              echo ($edit_data->gender=='Male') ? 'checked':'';?> value="Male" id="Male"><label for="Male">Male</label>
							<input name="gender" type="radio" <?php
              echo ($edit_data->gender=='Female') ? 'checked':'';?> value="Female" id="Female"><label for="Female">Female</label>
						</div>
						<div class="form-group mt-2">
							<label for="">Department</label>
							<select class="form-select" aria-label=".form-select-sm example" name="dept" id="">
								<option value="">-select-</option>
								<option <?php
                echo ($edit_data->dept=='BBA') ? 'selected':''; ?> value="BBA">BBA</option>
								<option <?php
                echo ($edit_data->dept=='EEE') ? 'selected':''; ?> value="EEE">EEE</option>
								<option <?php
                echo ($edit_data->dept=='CSE') ? 'selected':''; ?> value="CSE">CSE</option>
								<option <?php
                echo ($edit_data->dept=='Economics') ? 'selected':''; ?> value="Economics">Economics</option>
								<option <?php
                echo ($edit_data->dept=='English') ? 'selected':''; ?> value="English">English</option>
								<option <?php
                echo ($edit_data->dept=='Law') ? 'selected':''; ?> value="Law">Law</option>
								<option <?php
                echo ($edit_data->dept=='Architecture') ? 'selected':''; ?>value="Architecture">Architecture</option>
							</select>
						</div>
						<div class="form-group mt-2">
							<label for="teacher_photo_edit" <div style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i> <img style="width: 100px;" id="new_preview" src="photos/<?php echo $edit_data->photo; ?>" alt=""></div>Teacher Photo</label>
							<input name="new_photo"style="display:none;" class="form-control" type="file" id="teacher_photo_edit">
              <input type="hidden" value="<?php echo $edit_data->photo; ?>" name="old_photo">
						</div>
						<div class="form-group mt-2 mb-2 mx-auto">
							<label for=""></label>
							<input name="crud" class="btn btn-primary" type="submit" value="Update Info">
						</div>
					</form>
        </div>
      </div>
    </div>
  </div>
</div>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  $('input[name="new_photo"]').change(function(e){
      let file_url = URL.createObjectURL(e.target.files[0]);
      $('img#new_preview').attr('src', file_url);
    });//Preview for the photo
  </script>
</body>
</html>