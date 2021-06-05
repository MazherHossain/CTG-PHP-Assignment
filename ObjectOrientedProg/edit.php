<?php
include_once "autoload.php";
$user = new User;
if(isset($_POST['crud'])){
  
	if(isset($_GET['edit_id'])){
    echo $name = $_POST['name'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$username = $_POST['username'];
    $id=$_GET['edit_id'];
		$user->updateUser($name,$email,$cell,$username,$id);
	}
}

if(isset($_GET['edit_id'])){
  $id = $_GET['edit_id'];
  $d=$user-> findUser($id);
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
        <h2>User Data Edit</h2>

        <hr>
        <form action="" method="POST">
        <div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control mb-2" value="<?php echo $d->name; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control mb-2" value="<?php echo $d->email; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control mb-2" value="<?php echo $d->cell; ?>" type="text">
					</div>
					<div class="form-group">
						<label for="">User Name</label>
						<input name="username" class="form-control mb-2" value="<?php echo $d->username; ?>" type="text">
					</div>
					<div class="modal-footer">
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
  
  <!--<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  $('input[name="new_photo"]').change(function(e){
      let file_url = URL.createObjectURL(e.target.files[0]);
      $('img#new_preview').attr('src', file_url);
    });//Preview for the photo
  </script>-->
</body>
</html>