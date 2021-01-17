<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assignment 1</title>
</head>
<body>
  <?php

    $bangla=60;
    $english=79;
    $math=90;
    $science=60;
    $social=50;

    $Aplus=5;
    $A=4.5;
    $Bplus=4;
    $B=3.5;
    $Cplus=3;
    $C=2.5;
    $Dplus=2;
    $D=1.5;
    $F=0;

    $gpa=0;

    //Bangla
    if($bangla >= 80){
      echo "You got A+ in Bangla<br>";
      $bangla=$Aplus;
    }
    elseif($bangla >= 75){
      echo "You got A in Bangla<br>";
      $bangla=$A;
    }
    elseif($bangla >= 70){
      echo "You got B+ in Bangla<br>";
      $bangla=$Bplus;
    }
    elseif($bangla >= 65){
      echo "You got B in Bangla<br>";
      $bangla=$B;
    }
    elseif($bangla >= 60){
      echo "You got C+ in Bangla<br>";
      $bangla=$Cplus;
    }
    elseif($bangla >= 55){
      echo "You got C in Bangla<br>";
      $bangla=$C;
    }
    elseif($bangla >= 50){
      echo "You got D+ in Bangla<br>";
      $bangla=$Dplus;
    }
    elseif($bangla >= 45){
      echo "You got D in Bangla<br>";
      $bangla=$D;
    }
    else{
      echo"You failed in Bangla<br>";
      $bangla=$F;
    }

    //English
    if($english >= 80){
      echo "You got A+ in English<br>";
      $english=$Aplus;
    }
    elseif($english >= 75){
      echo "You got A in English<br>";
      $english=$A;
    }
    elseif($english >= 70){
      echo "You got B+ in English<br>";
      $english=$Bplus;
    }
    elseif($english >= 65){
      echo "You got B in English<br>";
      $english=$B;
    }
    elseif($english >= 60){
      echo "You got C+ in English<br>";
      $english=$Cplus;
    }
    elseif($english >= 55){
      echo "You got C in English<br>";
      $english=$C;
    }
    elseif($english >= 50){
      echo "You got D+ in English<br>";
      $english=$Dplus;
    }
    elseif($english >= 45){
      echo "You got D in English<br>";
      $english=$D;
    }
    else{
      echo"You failed in English<br>";
      $english=$F;
    }

    //Math
    if($math >= 80){
      echo "You got A+ in Math<br>";
      $math=$Aplus;
    }
    elseif($math >= 75){
      echo "You got A in Math<br>";
      $math=$A;
    }
    elseif($math >= 70){
      echo "You got B+ in Math<br>";
      $math=$Bplus;
    }
    elseif($math >= 65){
      echo "You got B in Math<br>";
      $math=$B;
    }
    elseif($math >= 60){
      echo "You got C+ in Math<br>";
      $math=$Cplus;
    }
    elseif($math >= 55){
      echo "You got C in Math<br>";
      $math=$C;
    }
    elseif($math >= 50){
      echo "You got D+ in Math<br>";
      $math=$Dplus;
    }
    elseif($math >= 45){
      echo "You got D in Math<br>";
      $math=$D;
    }
    else{
      echo"You failed in Math<br>";
      $math=$F;
    }

    //Science
    if($science >= 80){
      echo "You got A+ in Science<br>";
      $science=$Aplus;
    }
    elseif($science >= 75){
      echo "You got A in Science<br>";
      $science=$A;
    }
    elseif($science >= 70){
      echo "You got B+ in Science<br>";
      $science=$Bplus;
    }
    elseif($science >= 65){
      echo "You got B in Science<br>";
      $science=$B;
    }
    elseif($science >= 60){
      echo "You got C+ in Science<br>";
      $science=$Cplus;
    }
    elseif($science >= 55){
      echo "You got C in Science<br>";
      $science=$C;
    }
    elseif($science >= 50){
      echo "You got D+ in Science<br>";
      $science=$Dplus;
    }
    elseif($science >= 45){
      echo "You got D in Science<br>";
      $science=$D;
    }
    else{
      echo"You failed in Science<br>";
      $science=$F;
    }

    //Social
    if($social >= 80){
      echo "You got A+ in Social<br>";
      $social=$Aplus;
    }
    elseif($social >= 75){
      echo "You got A in Social<br>";
      $social=$A;
    }
    elseif($social >= 70){
      echo "You got B+ in Social<br>";
      $social=$Bplus;
    }
    elseif($social >= 65){
      echo "You got B in Social<br>";
      $social=$B;
    }
    elseif($social >= 60){
      echo "You got C+ in Social<br>";
      $social=$Cplus;
    }
    elseif($social >= 55){
      echo "You got C in Social<br>";
      $social=$C;
    }
    elseif($social >= 50){
      echo "You got D+ in Social<br>";
      $social=$Dplus;
    }
    elseif($social >= 45){
      echo "You got D in Social<br>";
      $social=$D;
    }
    else{
      echo"You failed in Social<br>";
      $social=$F;
    }
    
    $gpa=($bangla+$english+$math+$science+$social)/5;
    echo "Your GPA is ". $gpa;
  ?>
</body>
</html>