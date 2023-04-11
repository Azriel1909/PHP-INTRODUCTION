<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
  <form action="19.php" method="post">
    What was your grade?
    <input type="text" step="0.1" name="grade"> <br>
    <input type=submit>
  </form>
  <?php
    $grade = $_POST["grade"];
    switch($grade){
      case "A":
        echo "You did amazing!";
        break;
      case "B":
        echo "You did pretty good!";
        break;
      case "C":
        echo "You did poorly!";
        break;
      case "D":
        echo "You did very bad!";
        break;
      case "F":
        echo "You fail!";
        break;
      default:
        echo "Invalid Grade";
    }
  ?>
</body>
</html>