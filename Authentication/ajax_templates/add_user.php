<?php
  include "../autoload.php";
  //Get All User Data
  $name= $_POST['name'];
  $username= $_POST['username'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $password= $_POST['pass'];
  //hash password
  $hash_pass= password_hash($password, PASSWORD_DEFAULT);
  //Upload User Photo
  $file=move($_FILES['photo'],'../photos/users/');
  $file_name=$file['unique_name'];
  if(empty($file['err_msg'])){
    create("INSERT INTO users (name, username, email, phone, password,photo) VALUES ('$name','$username','$email','$phone','$hash_pass','$file_name')");
  }
  else{
    echo $file['err_msg'];
  }
?>