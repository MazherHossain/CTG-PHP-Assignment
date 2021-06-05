<?php
//User management

  class User extends Database{
    public function sendData($name,$email,$cell,$username){
      parent::create("INSERT INTO users(name, email, cell, username) VALUES ('$name','$email','$cell,','$username')");
      
      //We could have used 'this->' instead of 'parent' as well
    }

    //All users
    public function getDataFromDatabase(){
      return parent::all('users');
    }

    //Delete user
    public function userDelete($id){
      parent::delete('users',$id);
      header('location:index.php');
    }

    //Update user
    public function updateUser($name,$email,$cell,$username,$id){
      $updated_at=date('Y-m-d g:i:h', time());
      parent::update("UPDATE users SET name='$name',email='$email',cell='$cell',username='$username' updated_at='$updated_at' WHERE id='$id'");
      header('location:index.php');
    }

    //Find User
    public function findUser($id){
      return parent::find('users',$id);
    }
}
?>