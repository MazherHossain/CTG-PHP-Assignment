<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Assignment 2</title>
  <!--এমন একটি ফাংসন বানান যেটা দিয়ে আয়তক্ষেত্র, বগক্ষেত্র, এবং বৃত্তে ক্ষেত্রফল বের করা যাবে-->


</head>
<body>
  
  <?php
    function area($length=0, $width=0, $rad=0, $which=''){
      if($which=='rectangle'){
        $ar=$length*$width;
        echo "The area of the rectangle is $ar.";
      }
      elseif($which=='square'){
        $ar=$length*$length;
        echo "The area of the square is $ar.";
      }
      elseif($which=='circle'){
        $ar=3.1416*$rad;
        echo "The area of the circle is $ar.";
      }
      else{
        echo "Invalid input.";
      }
    }
    area(0,0,5,'circle');
  ?>

</body>
</html>