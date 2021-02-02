<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Grades</title>
  <!--পঞ্চম শ্রেণীর ছাত্রছাত্রীদের কিছু ডাটা নিয়ে একটি এরে স্ট্রাকচার তৈরি করুন যেখানে তাদের রেজাল্টের উপরে বেইজ করে জিপিএ এবং গ্রেড সহ প্রকাশ করা হবে , , , রেজাল্ট পাবলিস্ট করার জন্য অবশ্যই একটি রেজাল্ট ফাংসন বানান এবং এই ফাংসন টি ব্যবহার করে রেজাল্ট পাবলিস্ট করুন । ফাইনালি রেজাল্টে সিজিপিএ এবং ফাইরাল গ্রেড পাবলিস্ট করুন-->


</head>
<body>
  <?php
    $students=[
      [
        'name' => 'Tom',
        'age'  => '10',
        'cell' => '01712345601',
        'location'=>'Mirpur',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Aby',
        'age'  => '10',
        'cell' => '01712345602',
        'location'=>'Banani',
        'marks'=> [80,100,70,65,55]
      ],
      [
        'name' => 'Arnold',
        'age'  => '10',
        'cell' => '01712345603',
        'location'=>'Bashundhara',
        'marks'=> [70,75,60,50,45]
      ],
      [
        'name' => 'Bae',
        'age'  => '10',
        'cell' => '01712345604',
        'location'=>'Uttara',
        'marks'=> [80,90,85,89,85]
      ],
      [
        'name' => 'Catrina',
        'age'  => '10',
        'cell' => '01712345605',
        'location'=>'Mirpur',
        'marks'=> [40,90,80,75,85]
      ],
      [
        'name' => 'Celina',
        'age'  => '10',
        'cell' => '01712345606',
        'location'=>'Banani',
        'marks'=> [89,90,69,75,71]
      ],
      [
        'name' => 'Gomez',
        'age'  => '10',
        'cell' => '01712345607',
        'location'=>'Banani',
        'marks'=> [80,70,75,75,85]
      ],
      [
        'name' => 'Stark',
        'age'  => '10',
        'cell' => '01712345608',
        'location'=>'Bashundhara',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Hulk',
        'age'  => '10',
        'cell' => '01712345609',
        'location'=>'Uttara',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Hank',
        'age'  => '10',
        'cell' => '01712345610',
        'location'=>'Mirpur',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Roy',
        'age'  => '10',
        'cell' => '01712345611',
        'location'=>'Banani',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Micky',
        'age'  => '10',
        'cell' => '01712345612',
        'location'=>'Mirpur',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Pew',
        'age'  => '10',
        'cell' => '01712345613',
        'location'=>'Banani',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Troy',
        'age'  => '10',
        'cell' => '01712345614',
        'location'=>'Bashundhara',
        'marks'=> [80,90,70,75,85]
      ],
      [
        'name' => 'Marshal',
        'age'  => '10',
        'cell' => '01712345615',
        'location'=>'Uttara',
        'marks'=> [70,65,60,50,45]
      ],
      [
        'name' => 'Bobby',
        'age'  => '10',
        'cell' => '01712345616',
        'location'=>'Banani',
        'marks'=> [80,90,90,75,85]
      ],
      [
        'name' => 'Harry',
        'age'  => '10',
        'cell' => '01712345617',
        'location'=>'Mirpur',
        'marks'=> [80,90,70,75,85]
      ]
    ];

    foreach($students as $student){

        echo "Student Name = ".$student['name']."<br>";
        echo "Age  = ".$student['age']."<br>";
        echo "Cell phone = ".$student['cell']."<br>";
        echo "Student address = ".$student['location']."<br>";
        if($student['marks'][0]>=80 and $student['marks'][0] <= 100){
          echo "You got = ".$student['marks'][0]." in English and your grade is A+"."<br>";
          $engGrade=4;
        }
        elseif($student['marks'][0]>=75 and $student['marks'][0] <= 79){
          echo "You got = ".$student['marks'][0]." in English and your grade is A"."<br>";
          $engGrade=3.5;
        }
        elseif($student['marks'][0]>=70 and $student['marks'][0] <= 74){
          echo "You got = ".$student['marks'][0]." in English and your grade is B+"."<br>";
          $engGrade=3;
        }
        elseif($student['marks'][0]>=65 and $student['marks'][0] <= 69){
          echo "You got = ".$student['marks'][0]." in English and your grade is B"."<br>";
          $engGrade=2.5;
        }
        elseif($student['marks'][0]>=60 and $student['marks'][0] <= 64){
          echo "You got = ".$student['marks'][0]." in English and your grade is C+"."<br>";
          $engGrade=2;
        }
        elseif($student['marks'][0]>=55 and $student['marks'][0] <= 59){
          echo "You got = ".$student['marks'][0]." in English and your grade is C"."<br>";
          $engGrade=1.5;
        }
        elseif($student['marks'][0]>=50 and $student['marks'][0] <= 54){
          echo "You got = ".$student['marks'][0]." in English and your grade is D"."<br>";
          $engGrade=1;
        }
        elseif($student['marks'][0]>=0 and $student['marks'][0] <= 49){
          echo "You got = ".$student['marks'][0]." in English and your grade is F"."<br>";
          $engGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][1]>=80 and $student['marks'][1] <= 100){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is A+"."<br>";
          $bangGrade=4;
        }
        elseif($student['marks'][1]>=75 and $student['marks'][1] <= 79){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is A"."<br>";
          $bangGrade=3.5;
        }
        elseif($student['marks'][1]>=70 and $student['marks'][1] <= 74){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is B+"."<br>";
          $bangGrade=3;
        }
        elseif($student['marks'][1]>=65 and $student['marks'][1] <= 69){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is B"."<br>";
          $bangGrade=2.5;
        }
        elseif($student['marks'][1]>=60 and $student['marks'][1] <= 64){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is C+"."<br>";
          $bangGrade=2;
        }
        elseif($student['marks'][1]>=55 and $student['marks'][1] <= 59){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is C"."<br>";
          $bangGrade=1.5;
        }
        elseif($student['marks'][1]>=50 and $student['marks'][1] <= 54){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is D"."<br>";
          $bangGrade=1;
        }
        elseif($student['marks'][1]>=0 and $student['marks'][1] <= 49){
          echo "You got = ".$student['marks'][1]." in Bangla and your grade is F"."<br>";
          $bangGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][2]>=80 and $student['marks'][2] <= 100){
          echo "You got = ".$student['marks'][2]." in Math and your grade is A+"."<br>";
          $mathGrade=4;
        }
        elseif($student['marks'][2]>=75 and $student['marks'][2] <= 79){
          echo "You got = ".$student['marks'][2]." in Math and your grade is A"."<br>";
          $mathGrade=3.5;
        }
        elseif($student['marks'][2]>=70 and $student['marks'][2] <= 74){
          echo "You got = ".$student['marks'][2]." in Math and your grade is B+"."<br>";
          $mathGrade=3;
        }
        elseif($student['marks'][2]>=65 and $student['marks'][2] <= 69){
          echo "You got = ".$student['marks'][2]." in Math and your grade is B"."<br>";
          $mathGrade=2.5;
        }
        elseif($student['marks'][2]>=60 and $student['marks'][2] <= 64){
          echo "You got = ".$student['marks'][2]." in Math and your grade is C+"."<br>";
          $mathGrade=2;
        }
        elseif($student['marks'][2]>=55 and $student['marks'][2] <= 59){
          echo "You got = ".$student['marks'][2]." in Math and your grade is C"."<br>";
          $mathGrade=1.5;
        }
        elseif($student['marks'][2]>=50 and $student['marks'][2] <= 54){
          echo "You got = ".$student['marks'][2]." in Math and your grade is D"."<br>";
          $mathGrade=1;
        }
        elseif($student['marks'][2]>=0 and $student['marks'][2] <= 49){
          echo "You got = ".$student['marks'][2]." in Math and your grade is F"."<br>";
          $mathGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][3]>=80 and $student['marks'][3] <= 100){
          echo "You got = ".$student['marks'][3]." in Science and your grade is A+"."<br>";
          $scGrade=4;
        }
        elseif($student['marks'][3]>=75 and $student['marks'][3] <= 79){
          echo "You got = ".$student['marks'][3]." in Science and your grade is A"."<br>";
          $scGrade=3.5;
        }
        elseif($student['marks'][3]>=70 and $student['marks'][3] <= 74){
          echo "You got = ".$student['marks'][3]." in Science and your grade is B+"."<br>";
          $scGrade=3;
        }
        elseif($student['marks'][3]>=65 and $student['marks'][3] <= 69){
          echo "You got = ".$student['marks'][3]." in Science and your grade is B"."<br>";
          $scGrade=2.5;
        }
        elseif($student['marks'][3]>=60 and $student['marks'][3] <= 64){
          echo "You got = ".$student['marks'][3]." in Science and your grade is C+"."<br>";
          $scGrade=2;
        }
        elseif($student['marks'][3]>=55 and $student['marks'][3] <= 59){
          echo "You got = ".$student['marks'][3]." in Science and your grade is C"."<br>";
          $scGrade=1.5;
        }
        elseif($student['marks'][3]>=50 and $student['marks'][3] <= 54){
          echo "You got = ".$student['marks'][3]." in Science and your grade is D"."<br>";
          $scGrade=1;
        }
        elseif($student['marks'][3]>=0 and $student['marks'][3] <= 49){
          echo "You got = ".$student['marks'][3]." in Science and your grade is F"."<br>";
          $scGrade=0;
        }
        else{
          echo "Invalid input";
        }
        if($student['marks'][4]>=80 and $student['marks'][4] <= 100){
          echo "You got = ".$student['marks'][4]." in Social and your grade is A+"."<br>";
          $soGrade=4;
        }
        elseif($student['marks'][4]>=75 and $student['marks'][4] <= 79){
          echo "You got = ".$student['marks'][4]." in Social and your grade is A"."<br>";
          $soGrade=3.5;
        }
        elseif($student['marks'][4]>=70 and $student['marks'][4] <= 74){
          echo "You got = ".$student['marks'][4]." in Social and your grade is B+"."<br>";
          $soGrade=3;
        }
        elseif($student['marks'][4]>=65 and $student['marks'][4] <= 69){
          echo "You got = ".$student['marks'][4]." in Social and your grade is B"."<br>";
          $soGrade=2.5;
        }
        elseif($student['marks'][4]>=60 and $student['marks'][4] <= 64){
          echo "You got = ".$student['marks'][4]." in Social and your grade is C+"."<br>";
          $soGrade=2;
        }
        elseif($student['marks'][4]>=55 and $student['marks'][4] <= 59){
          echo "You got = ".$student['marks'][4]." in Social and your grade is C"."<br>";
          $soGrade=1.5;
        }
        elseif($student['marks'][4]>=50 and $student['marks'][4] <= 54){
          echo "You got = ".$student['marks'][4]." in Social and your grade is D"."<br>";
          $soGrade=1;
        }
        elseif($student['marks'][4]>=0 and $student['marks'][4] <= 49){
          echo "You got = ".$student['marks'][4]." in Social and your grade is F"."<br>";
          $soGrade=0;
        }
        else{
          echo "Invalid input";
        }
        $total=0;
        $cg=0;
        foreach($student['marks'] as $mark){
          $total+=$mark;
        }
        $cg=($soGrade+$scGrade+$mathGrade+$bangGrade+$engGrade)/5;
        echo "Total mark = ".$total."<br>";
        echo "Your CGPA is = ".$cg."<hr>";
      }
  ?>
</body>
</html>