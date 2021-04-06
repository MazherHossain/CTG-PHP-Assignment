<?php
//validate function for error message
function validate($msg, $type='danger'){
  return " <p class='alert alert-$type alert-dismissible fade show' role='alert'>$msg<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
}
function all($table, $order='DESC'){
  return connect()->query("SELECT * FROM $table ORDER BY id $order");
}//call all the data from a specific table
?>