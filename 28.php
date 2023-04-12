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
      // ! GETTERS & SETTERS
      class Movie {
        // Var and Public: visible to any other code in the program, open to everybody.
        public $title;
        // Private: Nobody can access it out outside of this movie class.
        private $rating; 

        function __construct($title, $rating){
          $this->title = $title;
          $this->setRating($rating);
        }

        // By using the set rating function and get rating function, we can both get it and set it.
        function getRating(){
          return $this->rating;
        }

        function setRating($rating){
          if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR" ){
            $this->rating = $rating;
          } else {
            $this->rating = "NR";
          }
        }
      }
      
      $infinity = new Movie("Infinity","Dog");
      echo $infinity->getRating();

      // G, PG, PG-13, R, NR
      $infinity->setRating("R");
      echo $infinity->getRating();
    ?>
  </body>
</html>