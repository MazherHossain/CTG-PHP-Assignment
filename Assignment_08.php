<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 8</title>
  <!--Ques:চিন্তা করে ফর লুপ ব্যবহার কারে ২,৩,৪,৫ এর নামতা বের করুন-->
</head>
<body>

  <?php

  $i=1;

  echo "Time Table for 2:<br>";
  for($i=1; $i<=10; $i++){
    echo "2*".$i."=".($i*2)."<br>";
  }

  echo "Time Table for 3:<br>";
  for($i=1; $i<=10; $i++){
    echo "3*".$i."=".($i*3)."<br>";
  }

  echo "Time Table for 4:<br>";
  for($i=1; $i<=10; $i++){
    echo "4*".$i."=".($i*4)."<br>";
  }

  echo "Time Table for 5:<br>";
  for($i=1; $i<=10; $i++){
    echo "5*".$i."=".($i*5)."<br>";
  }

  ?>
</body>
</html>