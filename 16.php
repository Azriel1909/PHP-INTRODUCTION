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
    // ! IF STATEMENTS
    $isTall = false;
    $isMale = false;
    // * AND > && both true
    // *  OR > || only one condition needs to be true
    // *   ! > || Negation operator

    if ($isMale && $isTall){
      echo "You are a tall male.";
    } elseif ($isMale && !$isTall ){ 
      echo "You are a short male.";
    }
    elseif (!$isMale && $isTall) {
      echo "You are not a male but are tall.";
    } {
      echo "You are not a male and not tall.";
    }
  ?>
</body>
</html>