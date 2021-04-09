<?php
include_once "autoload.php";
//Show Single student
if(isset($_GET['show_id'])){
  $id = $_GET['show_id'];
  $data = connect()->query("SELECT * FROM staffs WHERE id='$id'");
  $staff=$data-> fetch_object();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $staff->name; ?></title>
  <!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>

 <div class="container">
  <div class="row">
    <div class="col-lg-4 mx-auto mt-5">
      <div class="card">
        <img class="shw shadow" src="photos/<?php echo $staff->photo; ?>" alt="">
        <div class="card-body">
        <h2 class="text-center"><?php echo $staff->name; ?></h2>
        <p class="text-center"><?php echo $staff->username; ?></p>
          <table class="table">
            <tr>
              <td>Name</td>
              <td><?php echo $staff->name; ?></td>
            </tr>
            <tr>
              <td>Email</td>
              <td><?php echo $staff->email; ?></td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td><?php echo $staff->cell; ?></td>
            </tr>
            <tr>
              <td>Location</td>
              <td><?php echo $staff->location; ?></td>
            </tr>
            <tr>
              <td>Age</td>
              <td><?php echo $staff->age; ?></td>
            </tr>
            <tr>
              <td>Gender</td>
              <td><?php echo $staff->gender; ?></td>
            </tr>
          </table>
          <a class="btn btn-primary btn-sm" href="staff_index.php">Back</a>
        </div>
      </div>
    </div>
  </div>
 </div>

  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
</body>
</html>