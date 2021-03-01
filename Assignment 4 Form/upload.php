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
      $file = $_FILES['profile_photo'];//Getting file info
      $file_name = $file['name'];//Getting file info
      $file_tmpname = $file['tmp_name'];//Getting file info
      $file_size = $file['size'];//Getting file info

      move_uploaded_file($file_tmpname, 'photos/'.$file_name);//Uploading and storing files in a folder
    }
  ?>

  <div class="bod mx-auto mt-5">
    <div class="wrap-shadow">
      <div class="card">
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
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