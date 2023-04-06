<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="18.php" method="post">
    First Number: <input type="number" step="0.1" name="n1"> <br>
    Operation: <input type="text" name="op"> <br>
    Second Number:<input type="number" step="0.1" name="n2"> <br>
    <input type=submit>
  </form>
  <?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $op = $_POST["op"];

    if ($op == "+"){
      echo $n1 + $n2;
    } elseif ($op == "-") {
      echo $n1 - $n2;
    } elseif ($op == "/"){
      echo $n1 / $n2;
    } elseif ($op == "*"){
      echo $n1 * $n2;
    } elseif ($op == "%"){
      echo $n1 % $n2;
    } else {
      echo "Invalid Operator.";
    }
  ?>
</body>
</html>