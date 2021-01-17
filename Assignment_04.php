<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 4</title>
</head>
<body>
  <?php
    $mark=70;
    $name='mdoodmf';
    $gender=null;

    if($name=='Samia'||$name=='Nadia'||$name=='Tamanna'||$name=='Fiha'){
      $gender='Apu';
    }
    else{
      $gender='Vaiya';
    }

    if($mark <= 39){
      echo $gender." Apni fail korechen";
    }
    else{
      echo $gender." Apni pass korechen";
    }
  ?>
</body>
</html>