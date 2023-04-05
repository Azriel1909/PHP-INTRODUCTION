<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  // ! WORKING WITH STRINGS IN PHP
  $phrase = "Pink Restaurant";
  // Any plaint text you want to represent
  echo $phrase; 
  echo "<br>";
  echo strtolower($phrase);
  echo "<br>";
  echo strtoupper($phrase); 
  // fint out the index
  echo "<br>";
  echo $phrase[0];  
  echo "<br>";
  echo "Ximena"[0];
  echo "<br>"; 
  $phrase[0] = "B";
  echo $phrase;
  echo "<br>"; 

  $phrase = "Pink Restaurant";
  echo str_replace("Pink","Lovely", $phrase);
  echo "<br>"; 

  $phrase = "Pink Restaurant";
  echo substr($phrase, 5, 3);
  echo "<br>"; 

  ?>
</body>
</html>