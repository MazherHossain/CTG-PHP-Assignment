<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 7</title>
  <!--বাংলাদেশি টাকাতে ইউএস ডলার, কানাডিয়ান ডলার, পাউন্ড এ কনভাট করার একটি ফাংসন বানান-->


</head>
<body>
  <?php
    function taka($tk,$country){
      if($country=='us'){
        $money=$tk/85;
        echo "You have $tk tk which is $$money in US currency.";
      }
      elseif($country=='cn'){
        $money=$tk/67;
        echo "You have $tk tk which is $$money in Canadian currency.";
      }
      elseif($country=='uk'){
        $money=$tk/116;
        echo "You have $tk tk which is &pound$money in UK currency.";
      }
      else{
        echo "Invalid input";
      }
    }
    taka(10000000,'cn');
  ?>
</body>
</html>