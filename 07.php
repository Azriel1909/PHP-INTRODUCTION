<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="07.php" method="get" >
    <input type="number" name="n1">
    <br>
    <input type="number" name="n2">
    <br>
    <input type="submit" >
  </form>
  Answer: <?php echo $_GET["n1"] + $_GET["n2"] ?>
</body>
</html>