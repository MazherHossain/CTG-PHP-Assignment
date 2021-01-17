<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  
  <title>Assignment 2</title>
  <!--Ques:বয়স এর উপরে ভিত্তি করে একটি ইউজার একসেস প্রোগ্রাম রেডি করুন যেখানে ২০ থেকে ৩৫ বছরের সবাই একসেস পাবে-->


</head>
<body>
  <?php
    $age=39;
    if($age >= 20 && $age <= 35){
      echo "Welcome to our environment user";
    }
    else{
      echo "You're age doesn't match with our age requirement which should be from 20 to 35";
    }
  ?>
</body>
</html>