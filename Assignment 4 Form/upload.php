<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Profile pic upload</title>
  <!--
    #Uploading Picture
    #File Upload format validation
    #File size 500kb
  -->


  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/css/all.css">
  <link rel="stylesheet" href="assets/css/style2.css">
</head>
<body>
  <?php
    if(isset($_POST['upload'])){
      $file = $_FILES['profile_photo'];//Getting the uploaded file info
      $file_name = $file['name'];//Getting the uploaded file info
      $file_tmpname = $file['tmp_name'];//Getting the uploaded file info
      $file_size = $file['size'];//Getting the uploaded file info

      //files show their size via bites
      $size_in_kb = $file_size/1024; //as we know, 1024b = 1kb

      $file_endpart = explode('.', $file_name);//Extracting the format
      $extension = end($file_endpart);//Extracted the format

      $unique_name_added = time().rand(1,100);
      $unique_name = md5($unique_name_added).".".$extension;//Adding unique name to the file

      //File validation
      if(empty($file_name)){
        $msg = " <p class='alert alert-warning alert-dismissible fade show' role='alert'>Select a file first! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
      }
      else if(in_array($extension, ['jpg','png','gif','jpeg','webp'])==false){
        $msg = " <p class='alert alert-danger alert-dismissible fade show' role='alert'>Invalid file format! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
      }
      else if($size_in_kb > 500){
        $msg = " <p class='alert alert-info alert-dismissible fade show' role='alert'>File size too big! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
      }
      else{
        move_uploaded_file($file_tmpname, 'photos/'.$unique_name);//Uploading and storing files in a folder
        $msg = " <p class='alert alert-success alert-dismissible fade show' role='alert'>File Upload Successful! <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' ></button> </p>";
      }
      
    }
  ?>

  <div class="bod mx-auto mt-5">
    <div class="wrap-shadow">
      <div class="card">
        <div class="card-body">
          <?php
            if(isset($msg)){
              echo $msg;//It is important to add this extension here to show the messages
            }
          ?>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-group">
              <img style="width: 100px;" id="preview" src="" alt=""><!--Preview-->
            </div>
            <label for="file_upload"><h4 style="cursor:pointer" data-toggle="tooltip" title="Profile Photo" class="pic"><i class="fas fa-images"></i></h4></label><!--Upload Icon-->
            <input name="profile_photo" style="display:none" type="file" id="file_upload">
          </div>
            <div class="form-group">
            <input name="upload" class="btn btn-sm btn-success mt-3" type="submit" value="Upload Now">
          </div>
        </form>
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