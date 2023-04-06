<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="13.php" method="post">
    Student: <input type=text name="student">
    <input type="submit">
  </form>
  <?php
    // ! ASSOCIATIVE ARRAYS
    // Mapping the value to a specific student's name 
    //              Key = Value
    $grades = array("Oscar"=>"A+", "Cris"=>"B-", "Camile"=>"C+" );
    // Grabbing the value, accessing the element inside the array
    echo $grades[$_POST["student"]];
  ?>
</body>
</html>