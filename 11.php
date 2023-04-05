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

  // ! ARRAY: Is a container or it is a structure where we can store multiple pieces of information.

  $myArray = array("Mert", "Volkgan", "Asya", "Vajhar");
  //Index           0         1       2         3 
  // ? Mert is an element inside the array 

  $myArray2 = array(true, 40, "Ximena", 0.999);

  // ? How can we access? With indexes 
  echo $myArray;
  echo "<br>";
  echo $myArray[0];
  echo "<br>";
  echo $myArray[2];

  // ? Modifying the date od the elements
  echo "<br>";
  $myArray[2] = "Guluk";
  echo $myArray[2];

  // ? Adding elements
  echo "<br>";
  $myArray[4] = "Cameron";
  echo $myArray[4];

  // ? How many elements are inside the array?
  echo "<br>";
  echo count($myArray);
  
  ?>
</body>
</html>