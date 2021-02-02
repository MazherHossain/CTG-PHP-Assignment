<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <title>Student Data</title>
  <!--একটি স্টুডেন্ট এরে ডাটা দৈরি করুন যেখানে প্রায় ২০ জন এর ডাটা থাকবে এবং সেখানে থেকে শুরু মিরপুরের এবং বনানীর বাসিন্দাদের ডাটা প্রিন্ট করুন-->


</head>
<body>
  <?php
    $students=[
      [
        'name' => 'Tom',
        'age'  => '10',
        'cell' => '01712345601',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Aby',
        'age'  => '10',
        'cell' => '01712345602',
        'location'=>'Banani'
      ],
      [
        'name' => 'Arnold',
        'age'  => '10',
        'cell' => '01712345603',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Bae',
        'age'  => '10',
        'cell' => '01712345604',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Catrina',
        'age'  => '10',
        'cell' => '01712345605',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Celena',
        'age'  => '10',
        'cell' => '01712345606',
        'location'=>'Banani'
      ],
      [
        'name' => 'Gomez',
        'age'  => '10',
        'cell' => '01712345607',
        'location'=>'Banani'
      ],
      [
        'name' => 'Stark',
        'age'  => '10',
        'cell' => '01712345608',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Hulk',
        'age'  => '10',
        'cell' => '01712345609',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Hank',
        'age'  => '10',
        'cell' => '01712345610',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Roy',
        'age'  => '10',
        'cell' => '01712345611',
        'location'=>'Banani'
      ],
      [
        'name' => 'Micky',
        'age'  => '10',
        'cell' => '01712345612',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Pew',
        'age'  => '10',
        'cell' => '01712345613',
        'location'=>'Banani'
      ],
      [
        'name' => 'Troy',
        'age'  => '10',
        'cell' => '01712345614',
        'location'=>'Bashundhara'
      ],
      [
        'name' => 'Marshal',
        'age'  => '10',
        'cell' => '01712345615',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Bobby',
        'age'  => '10',
        'cell' => '01712345616',
        'location'=>'Banani'
      ],
      [
        'name' => 'Harry',
        'age'  => '10',
        'cell' => '01712345617',
        'location'=>'Mirpur'
      ],
      [
        'name' => 'Jarvis',
        'age'  => '10',
        'cell' => '01712345618',
        'location'=>'Banani'
      ],
      [
        'name' => 'Olson',
        'age'  => '10',
        'cell' => '01712345619',
        'location'=>'Uttara'
      ],
      [
        'name' => 'Saul',
        'age'  => '10',
        'cell' => '01712345620',
        'location'=>'Banani'
      ]
    ];

    foreach($students as $student){

      if($student['location']=='Banani' or $student['location']=='Mirpur'){
        echo "Name = ".$student['name']."<br>";
        echo "Age  = ".$student['age']."<br>";
        echo "Cell phone = ".$student['cell']."<br>";
        echo "Location = ".$student['location']."<hr>";
      }
      else{
        echo "Invalid output";
      }
    }
  ?>
</body>
</html>