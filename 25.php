!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>

    <?php 
      // > Create a class = Create a new Data Type (template)
      // > It is like a blueprint of a book
      class Books {
        var $title;
        var $author;
        var $pages;  
      }

      $book1 = new Books;
      $book1->title = "Quantum Computing Fundamentals";
      $book1->author = "Ximena Toledo";
      $book1->pages = 50;

      $book2 = new Books;
      $book1->title = "Quantum Computing: Shor Algorithm";
      $book1->author = "Ximena Toledo";
      $book1->pages = 6;

    
      // ? Object: Instance of a class
      // ? Class: Is like a blueprint, is a specification for what a x object is.
    ?>
  </body>
</html>