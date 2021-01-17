<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 3</title>
  <!--Ques:ইউজার মেমবারশিপ লেভেল তৈরি করুন যেখানে ইউজার রা তাদের ক্রেডিট অনুযায়ী বিভিন্ন লেভেলে আসবে-->
</head>
<body>
  <?php
    $credit=100;

    if($credit >= 100 && $credit <= 500){
      echo "Thank you for using our Starter package.";
    }
    elseif($credit >= 501 && $credit <= 1000){
      echo "Thank you for using our Premium package.";
    }
    elseif($credit >= 1001){
      echo "Thank you for using our Professional package.";
    }
    else{
      echo "Please register to our service to use our Starter, Premium and Professional packages";
    }
  ?>
</body>
</html>