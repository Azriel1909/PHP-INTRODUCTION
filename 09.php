<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <!-- The method get is not secure -->
  <form action="09.php" method="get">
    Name: <input type="text" name="name"> <br>
    <input type="submit">
  </form>
  <br>
  <?php
  // ! URL PARAMETERS/URL VALUE/URL VARIABLE: Value that we can tack on to the end of one of our URLs, which will essentially pass a value into our PHP program.
  echo $_GET["name"];
  ?>
</body>
</html>