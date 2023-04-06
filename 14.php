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
    // ! FUNCTIONS: Container designed to perform a specific Tag
    function sayHello($name, $age){
      echo("Hello $name! you are $age.");
    }

    // We have to call the function to use it, i am telling PHP that i want to execute all of the code inside of the function
    sayHello("Ximena", 20);
  ?>
</body>
</html>