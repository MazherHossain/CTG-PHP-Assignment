<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 8</title>
  <!--একটা হেডিং এ বাংলায় লাল, সবুজ, নিল, হলুদ, বেগুনি, কাল এই রং গুলা দিয়ে হেডিং এর কালার টা চেঞ্জ করে এমন করে একটা ফাংসন বানান-->


</head>
<body>
  <?php
    function heading($header,$color){
      if($color=='লাল'){
      echo "<h1 style='text-align:center; color:red'>$header</h1>";
    }
    elseif($color=='সবুজ'){
      echo "<h1 style='text-align:center; color:green'>$header</h1>";
    }
    elseif($color=='নিল'){
      echo "<h1 style='text-align:center; color:blue'>$header</h1>";
    }
    elseif($color=='বেগুনি'){
      echo "<h1 style='text-align:center; color:purple'>$header</h1>";
    }
    elseif($color=='কাল'){
      echo "<h1 style='text-align:center; color:black'>$header</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
    heading('Hello everyone','সবুজ');
  ?>
</body>
</html>