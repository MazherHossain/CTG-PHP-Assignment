<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 5</title>
  <!--একটি হেডিং ফাংসন বানান যেটা দিয়ে ডাইনামিস হেডিং তৈরি করা যাবে-->


</head>
<body>
  <?php
    function heading($header, $tag='h2', $align='center', $color='red', $font='Arial'){
      echo "<$tag style='text-align:$align; color:$color; font-family:$font'>$header</$tag>";
    }
    heading('hello everyone','h1','center','green',,'Broadway');
  ?>
</body>
</html>