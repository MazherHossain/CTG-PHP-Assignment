<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Assignment 3</title>
  <!--গ্রেড এবং জিপিএ বের করার জন্য একটি ফাংসন তৈরি করুন-->


</head>
<body>
  <?php
    function result($marks){
      $gpa=null;
      $grade=null;
      if($marks >= 80 and $marks <=100){
        $gpa=5;
        $grade='A+';
      }
      elseif($marks >= 75 and $marks <= 79){
        $gpa=4.5;
        $grade='A';
      }
      elseif($marks >= 70 and $marks <= 74){
        $gpa=4;
        $grade='B+';
      }
      elseif($marks >= 65 and $marks <=69){
        $gpa=3.5;
        $grade='B';
      }
      elseif($marks >= 60 and $marks <= 64){
        $gpa=3;
        $grade='C+';
      }
      elseif($marks >= 55 and $marks <= 59){
        $gpa=2.5;
        $grade='C';
      }
      elseif($marks >= 50 and $marks <= 54){
        $gpa=2;
        $grade='D+';
      }
      elseif($marks >= 45 and $marks <= 49){
        $gpa=1.5;
        $grade='D';
      }
      elseif($marks >= 0 and $marks <= 44){
        $gpa=0;
        $grade='F';
      }
      else{
        echo "Invalid input";
      }
      echo "Your grade is $grade and GPA is $gpa.";
    }
    result(90);
  ?>
</body>
</html>