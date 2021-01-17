<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 7</title>
</head>
<body>
  <?php
    $i=1;
    for($i=1; $i<=100000; $i+=3){
      if($i%11!=0){
        echo $i."<br>";
      }
      elseif($i%11==0){
        break;
      }
      else{
        continue;
      }
    }
  ?>
</body>
</html>