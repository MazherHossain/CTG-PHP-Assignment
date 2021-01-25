<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 6</title>
  <!--এমন একটি ফাংসন বানান যেখানে আপনার ওজন আর উচ্চা দিলে আপনার বডি ম্যাস ইন্ডেক্স বের করে দিব-->


</head>
<body>
  <?php
    function bmi($weight,$height){
      $bodymass=$weight/($height*$height);
      echo "Your weight is $weight kg, height is $height m, BMI is $bodymass kg/m<sup>2</sup>.";
    }
    bmi(65,1.7);
  ?>
</body>
</html>