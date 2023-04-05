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
      // Create a variable in php
      $characterName = "Volkang";   
      $characterAge = "38";
      $characterHobby = "cheat";
      // echo commands -> we use it with html tags and text
      echo "There once was a man named $characterName...<br>";
      echo "He was $characterAge years old... <br>";
      echo "He loves to $characterHobby his wife.<br>";
      // ! Variable Definition: Variables are containers where we can store different pieces of information that we want to keep track of our program.
      // Modifying variables 
      $characterName = "Mert";
      echo "But his best friend name $characterName...<br>";
      echo "Fell in love with Volkang's wife.";
      ?>
  </body>
</html>