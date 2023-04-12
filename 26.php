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
      // > Constructor: Is basically a function that is going to get called whenever we create an object of the class.
      class Book {
        var $title;
        var $author;
        var $pages;  

        function __construct($aTitle, $aAuthor, $aPages){
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }
      }

      $book1 = new Book("Quantum Computing Fundamentals","Ximena Toledo", 50);

      $book2 = new Book("Quantum Computing: Shor Algorithm","Ximena Toledo", 60);

      echo $book1->title;

    ?>
  </body>
</html>