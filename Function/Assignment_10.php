<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <title>Assignment 9</title>
  <!--পি এইচ পি এর রিভাস ফাংসনের মতন একটি ফাংসন বানান-->


</head>
<body>
  <?php
    function rev($text){
      echo "<bdo dir='rtl'>$text</bdo>";
    }
    rev('Hello world');
  ?>
</body>
</html>