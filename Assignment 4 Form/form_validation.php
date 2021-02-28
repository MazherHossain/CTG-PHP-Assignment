<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Form Validation</title>
  <!--
    #Form Value Get
    #Form Validation Global
    #Form Field Validation
    #Email Validation
    #Specific Email Validation
    #Phone number validation
  -->


  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

  <?php
    if(isset($_POST['insert'])){
      echo $name = $_POST['name'].'<br>';
      echo $email = $_POST['email'].'<br>';
      echo $cell = $_POST['cell'].'<br>';
      echo $age = $_POST['age'].'<br>';
    }
  ?>

    <div class="box mx-auto mt-5">
    <div class="wrap shadow">
      <div class="card">
        <div class="card-body">
          <h2>Sign in</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="">Name</label>
              <input name="name" class="form-control" type="text">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input name="email" class="form-control" type="text">
            </div>
            <div class="form-group">
              <label for="">Cell</label>
              <input name="cell" class="form-control" type="text">
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input name="age" class="form-control" type="text">
            </div>
            <div class="form-group mt-5">
              <input name="insert" class="btn btn-primary" type="submit" value="Sign In">
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