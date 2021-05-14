<?php
  include "../autoload.php";
  $email = $_POST['email'];
  $data = dataCheck('users','email',$email);
  if($data == true){
    echo "email already exists!";
  }
?>