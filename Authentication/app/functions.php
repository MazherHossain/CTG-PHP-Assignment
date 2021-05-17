<?php
//
//validate function for error message
function validate($msg, $type='danger'){
  return " <p class='alert alert-$type alert-dismissible fade show' role='alert'>$msg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
}
//
//
//
function all($table, $order='DESC'){
  return connect()->query("SELECT * FROM $table ORDER BY id $order");
}//call all the data from a specific table
//
//
//
function create($sql){
  connect() -> query($sql);
}//to send data from database
//
//
//
function move($file, $location='/',array $type=['jpg','png','jpeg']){
  //File management
  $file_name = $file['name'];
  $file_name_tmp = $file['tmp_name'];
  $file_arr = explode('.',$file_name);
  $file_ext = end($file_arr);
  $unique_name = md5(time().rand(1,100000)).'.'.$file_ext;
  $msg='';
  if(in_array($file_ext,$type)==false){
    $msg=validate('Invalid file format!');
  }else{
    move_uploaded_file($file_name_tmp,$location.$unique_name);//file upload
  }
  return[
    'unique_name' =>  $unique_name,
    'err_msg' => $msg
  ];
}
//
//
//
function delete($table,$id){
  connect()-> query("DELETE FROM $table WHERE id='$id'");
}
//
//
//
function find($table,$id){
  $data = connect()->query("SELECT * FROM $table WHERE id='$id'");
  return $data-> fetch_object();
}
//
//
//
function update($sql){
  connect()->query($sql);
}
//
//
//
function dataCheck($table,$column,$data){
  $data=connect()->query("SELECT $column FROM $table WHERE $column='$data' || $column LIKE '%$data%'");
  if($data->num_rows>0){
    return true;
  }
  else{
    return false;
  }
  //
  //
  //
  
}
//Login User Data
function loginUserInfo($id){
  return find('users',$id);
}
?>