//Validation message
function validate(msg, type='danger'){
  return "<p class='alert alert-"+ type +" alert-dismissible fade show' role='alert'>"+ msg +"<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></p>";
}