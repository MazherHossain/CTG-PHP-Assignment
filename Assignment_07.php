<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 7</title>
  <!--Ques:ফর লুপ ব্যবহার করে এমন একটা লুপ তৈরি করুন যা কি না প্রতি ধাপে ৩ করে ইনক্রিমেন্ট হবে এবং লুগপটি ১১ দ্বারা বিভাজ্য কোন সংখ্য পেলে অটো লুপ ব্রেক করে দিবে ( লুপ শেষ করে দিবে )-->
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