<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Assignment 4</title>
  <!--এমন একটি ফাংসন তৈরি করুন যেটাতে আপনার জন্ম সাল দিলে সে আপনার বয়স বের করে দিবে-->


</head>
<body>
  <?php
    function age(int $birthyear){
      $agee=date('Y')-$birthyear;
      echo "You are $agee years old.";
    }
    age(1995);
  ?>
</body>
</html>