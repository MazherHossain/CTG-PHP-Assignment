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
    #Age 18-40
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

      if(isset($email)){
        $email_arr = explode('@', $email);//email exploding
        $spec_mail = end($email_arr);
      }

      $cell_start = substr($cell, 0, 3);//cell manage

      if(empty($name)){
        $err['name'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($email)){
        $err['email'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($cell)){
        $err['cell'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }
      if(empty($age)){
        $err['age'] = "<p style='color:red;'> *required </p>";//warning for not entering the value
      }

    /**Form input validation for all input**/
      if( empty($name) || empty($email) || empty($cell) || empty($age) ){

        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>All information are required! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//warning for not entering any or all information

      }
      else if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Invalid Email Address! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Email validation warning
      }
      else if($cell>19999999999 || $cell<01300000000){
        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>Invalid phone number input data type! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//warning for not entering integer value as phone number
      }
      else if(in_array($cell_start, ['017','018','019','015','013','016','014'])==false){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Invalid phone number! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Phone number validation warning
      }
      else if($spec_mail != 'yahoo.com'){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>The Email Address must be of Yahoo! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Specific Email address validation
      }
      else if($age < 18 && $age > 39){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Only people aged 18 to 39 are allowed to sign in! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Specific age category validation
      }
      else
        $msg = "<p class='alert alert-success alert-dismissible fade show' role='alert'>You're good to go! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";//Success validation message
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
            <div class="form-group mt-2">
              <input name="insert" style="cursor:pointer" class="btn btn-outline-dark" type="submit" value="Sign In">
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