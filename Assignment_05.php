<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 5</title>
  <!--Ques:একটি লুপ তেরি করুন যেখানে ইনিশিয়াল ভেলু ১০০০০। আপনাকে লুপটা ৫০ বার ঘুরাতে হবে এবং ইনক্রিমেন্ট ও ডিক্রিমেন্ট অপারেটর ইউজ করে ২ বার করবেন-->
</head>
<body>
  <?php
    $i=10000;
    echo "This is for increment<br>";
    for($i=10000; $i<10050; $i++){
      echo $i."<br>";
    }
    echo"This is for decrement<br>";
    for($i=10000; $i>9950; $i--){
      echo $i."<br>";
    }
  ?>
</body>
</html>