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
      $name = $_POST['name'];
      $email = $_POST['email'];
      $cell = $_POST['cell'];
      $age = $_POST['age'];

      if(empty($name)){
        $err['name'] = "<p style='color:red;'> *required </p>";
      }
      if(empty($email)){
        $err['email'] = "<p style='color:red;'> *required </p>";
      }
      if(empty($cell)){
        $err['cell'] = "<p style='color:red;'> *required </p>";
      }
      if(empty($age)){
        $err['age'] = "<p style='color:red;'> *required </p>";
      }

    /**Form input validation for all input**/
      if( empty($name) || empty($email) || empty($cell) || empty($age) ){

        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>All information are required! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";

      }
      else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Invalid Email Address! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
      }
      else
       $msg = "<p class='alert alert-success alert-dismissible fade show' role='alert'>You're good to go! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
    }
  ?>

    <div class="box mx-auto mt-5">
    <div class="wrap shadow">
      <div class="card bg-info text-light">
        <div class="card-body">
          <h2>Sign in</h2>
          <?php
            if(isset($msg)){
              echo $msg;
            }
          ?>
          <form action="" method="POST">
            <div class="form-group mb-4">
              <label for="">Name</label>
              <input name="name" class="form-control" type="text">
              <?php
                if(isset($err['name'])){
                  echo $err['name'];
                }
              ?>
            </div>
            <div class="form-group mb-4">
              <label for="">Email</label>
              <input name="email" class="form-control" type="text">
              <?php
                if(isset($err['email'])){
                  echo $err['email'];
                }
              ?>
            </div>
            <div class="form-group mb-4">
              <label for="">Phone Number</label>
              <input name="cell" class="form-control" type="text">
              <?php
                if(isset($err['cell'])){
                  echo $err['cell'];
                }
              ?>
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input name="age" class="form-control" type="text">
              <?php
                if(isset($err['age'])){
                  echo $err['age'];
                }
              ?>
            </div>
            <div class="form-group mt-5">
              <input name="insert" class="btn btn-dark" type="submit" value="Sign In">
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