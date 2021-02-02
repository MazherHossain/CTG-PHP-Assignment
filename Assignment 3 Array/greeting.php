<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Greeting</title>
  <!--একটি ক্লাবের সকল মেমবারদের ডাটা এরেতে নিয়ে বয়সের উপর বেইজ করে ১৮ বছরের বেশি সবাইতে একটি স্বাগত মেসেজ পাঠান এবং ৪০ বছরের বেশি বয়সকতের শুভকামনা মেজে পাঠান , ,, অবশ্যই মেসেজ গুলা একটি ফাংসনের মাধ্যমে পাঠাবেন , , , এবং যাদের বয়স ১৮ এর কম হবে তাদের পরাশোনার দিকে মনযোগী হওয়ার মেসেজ দিন-->

  
</head>
<body>
<?php
    $people=[
      [
        'name' => 'Tom',
        'age'  => 10
      ],
      [
        'name' => 'Aby',
        'age'  => 14
      ],
      [
        'name' => 'Arnold',
        'age'  => 20
      ],
      [
        'name' => 'Bae',
        'age'  => 60
      ],
      [
        'name' => 'Catrina',
        'age'  => 40
      ],
      [
        'name' => 'Celina',
        'age'  => 19
      ],
      [
        'name' => 'Gomez',
        'age'  => 20
      ],
      [
        'name' => 'Stark',
        'age'  => 28
      ],
      [
        'name' => 'Hulk',
        'age'  => 66
      ],
      [
        'name' => 'Hank',
        'age'  => 11
      ],
      [
        'name' => 'Roy',
        'age'  => 41
      ],
      [
        'name' => 'Micky',
        'age'  => 46
      ],
      [
        'name' => 'Pew',
        'age'  => 25
      ],
      [
        'name' => 'Troy',
        'age'  => 18
      ],
      [
        'name' => 'Marshal',
        'age'  => 9
      ],
      [
        'name' => 'Bobby',
        'age'  => 19
      ],
      [
        'name' => 'Harry',
        'age'  => 17
      ],
      [
        'name' => 'Jarvis',
        'age'  => 28
      ],
      [
        'name' => 'Olson',
        'age'  => 39
      ],
      [
        'name' => 'Saul',
        'age'  => 30
      ]
    ];

    foreach($people as $person){

      if($person['age'] >= 40){
        echo "Greetings ".$person['name'].", Hope you have a nice day"."<br>";
      }
      elseif($person['age'] >= 18 and $person['age'] <40){
        echo "Welcome ".$person['name']."<br>";
      }
      elseif($person['age'] >= 0 and $person['age'] <18){
        echo "Be attentive towards your studies ".$person['name']."<br>";
      }
      else{
        echo "Invalid input";
      }
    }
  ?>
</body>
</html>