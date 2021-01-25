<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 11</title>
  <!--একটি ইমেজ আপলোডিং ফাংসন বানান যেথানে ছবির নাম, হাইট, ওইদ দিয়ে ছবিটাকে মেনেজ কার যাবে-->


</head>
<body>
  <?php
    function pic($picc,int $h,int $w,$name){
      echo "<img src='$picc' height='$h' width='$w' ><br>";
      echo "<h2 >$name</h2>";
    }
    pic('gaoh.png',400,200,'Gaoh');
  ?>
</body>
</html>