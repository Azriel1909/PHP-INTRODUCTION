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
    // ! INHERITANCE: classes inherit all of the functionality from the father class 

    // ! OVERRATING: Override functions that we inherited from the father class.
      class Chef {
        function makeChicken(){
          echo "The chef makes Chicken <br>";
        }
        function makeSalad(){
          echo "The chef makes Salad <br>";
        }
        function makeSpecialDish(){
          echo "The chef makes SpecialDish <br>";
        }
      }

      class ItalianChef extends Chef {
        function makePasta(){
          echo "The Italian chef makes Pasta";
        }

        function makeSpecialDish(){
          echo "The chef makes Pizza";
        }
      }

      $chef = new Chef();
      $chef->makeChicken();

      $ItalianChef = new ItalianChef();
      $ItalianChef->makeChicken();

      $chef = new Chef();
      $chef->makeSpecialDish();

      $ItalianChef = new ItalianChef();
      $ItalianChef->makeSpecialDish();

    ?>
  </body>
</html>