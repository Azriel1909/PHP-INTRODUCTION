<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="12.php" method="post">
    <!-- Multiple checkboxes to stored all elements -->
    Pineapples: <input type="checkbox" name ="fruits[]" value="pineapples"> <br>
    Nectarines: <input type="checkbox" name ="fruits[]" value="nectarines"> <br> 
    Bananas: <input type="checkbox" name ="fruits[]" value="bananas"> <br>
    <input type="submit">
  </form>
  <?php
    // New array was created
    $fruits = $_POST["fruits"];
    echo $fruits[1];
  ?>
</body>
</html>