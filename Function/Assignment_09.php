<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 9</title>
  <!--বড় হাত, ছোট হাত, উভয় হাত এর লেখা কনভাসন করার জন্য একটিং ফাংসন বানান-->


</head>
<body>
<?php
  function bothHand($text, $hand){
    if($hand=='boro'){
      echo "<h1 style='text-transform:uppercase'>$text</h1>";
    }
    elseif($hand=='choto'){
      echo "<h1 style='text-transform:lowercase'>$text</h1>";
    }
    else{
      echo "Invalid input";
    }
  }
  bothHand('Hello guys','choto');
  ?>
</body>
</html>