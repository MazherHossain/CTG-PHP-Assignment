<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 6</title>
</head>
<body>
  <?php
    $i=1;
    for($i=1; $i<=500; $i++){
      if($i%3==0)
      echo $i." Can be divided by 3<br>";
      elseif($i%4==0)
      echo $i." Can be divided by 4<br>";
      else{
        continue;
      }
    }
  ?>
</body>
</html>