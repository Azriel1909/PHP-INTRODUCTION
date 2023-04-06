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
    // ! IF STATEMENTS (con't)
    function getMax($n1, $n2, $n3){
      if ($n1 >= $n2 && $n1 >= $n3){
        return $n1;
      } elseif ($n2 >= $n1 && $n2 >= $n3 ){
        return $n2;
      } else {
        return $n3;
      }
    }
    echo getMax(3000, 900, 400);
  ?>
</body>
</html>