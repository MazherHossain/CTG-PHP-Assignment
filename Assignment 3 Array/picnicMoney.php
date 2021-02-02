<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Picnic money</title>
  <!--একটি বনভোজনের জন্য চাদার এরে ডাটা তৈরি করুন যেখানে সবাই সবার বেসিক ইনফরমেসন সহ চাদা প্রদান করবে ইচ্ছামতন , , , ফাইনালি মোট চাদার পরিমান বের করুন-->


</head>
<body>
  <?php
    $people=[
      [
        'name' => 'Tom',
        'cell' => '01712345601',
        'location'=>'Mirpur',
        'money'=>100
      ],
      [
        'name' => 'Aby',
        'cell' => '01712345602',
        'location'=>'Banani',
        'money'=>150
      ],
      [
        'name' => 'Arnold',
        'cell' => '01712345603',
        'location'=>'Bashundhara',
        'money'=>190
      ],
      [
        'name' => 'Bae',
        'cell' => '01712345604',
        'location'=>'Uttara',
        'money'=>250
      ],
      [
        'name' => 'Catrina',
        'cell' => '01712345605',
        'location'=>'Mirpur',
        'money'=>200
      ],
      [
        'name' => 'Celina',
        'cell' => '01712345606',
        'location'=>'Banani',
        'money'=>90
      ],
      [
        'name' => 'Gomez',
        'cell' => '01712345607',
        'location'=>'Banani',
        'money'=>160
      ],
      [
        'name' => 'Stark',
        'cell' => '01712345608',
        'location'=>'Bashundhara',
        'money'=>290
      ],
      [
        'name' => 'Hulk',
        'cell' => '01712345609',
        'location'=>'Uttara',
        'money'=>270
      ],
      [
        'name' => 'Hank',
        'cell' => '01712345610',
        'location'=>'Mirpur',
        'money'=>120
      ],
      [
        'name' => 'Roy',
        'cell' => '01712345611',
        'location'=>'Banani',
        'money'=>170
      ],
      [
        'name' => 'Micky',
        'cell' => '01712345612',
        'location'=>'Mirpur',
        'money'=>250
      ],
      [
        'name' => 'Pew',
        'cell' => '01712345613',
        'location'=>'Banani',
        'money'=>195
      ],
      [
        'name' => 'Troy',
        'cell' => '01712345614',
        'location'=>'Bashundhara',
        'money'=>310
      ],
      [
        'name' => 'Marshal',
        'cell' => '01712345615',
        'location'=>'Uttara',
        'money'=>370
      ],
      [
        'name' => 'Bobby',
        'cell' => '01712345616',
        'location'=>'Banani',
        'money'=>285
      ],
      [
        'name' => 'Harry',
        'cell' => '01712345617',
        'location'=>'Mirpur',
        'money'=>260
      ],
      [
        'name' => 'Jarvis',
        'cell' => '01712345618',
        'location'=>'Banani',
        'money'=>175
      ],
      [
        'name' => 'Olson',
        'cell' => '01712345619',
        'location'=>'Uttara',
        'money'=>95
      ],
      [
        'name' => 'Saul',
        'cell' => '01712345620',
        'location'=>'Banani',
        'money'=>100
      ]
    ];

    foreach($people as $person){

        echo "Person Name = ".$person['name']."<br>";
        echo "Cell phone = ".$person['cell']."<br>";
        echo "Student address = ".$person['location']."<br>";
        echo "Money given = ".$person['money']."<hr>";
        
  }
  $total=0;
        for($i=0; $i<=20; $i++){
          $total=$person['money']+$total;
        }
        echo "Total money = ".$total;
  ?>
</body>
</html>