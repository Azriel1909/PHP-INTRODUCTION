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
      class Student {
        var $name;
        var $major;
        var $grade;
        function __construct($name, $major, $grade){
          $this->name = $name;
          $this->major = $major;
          $this->grade = $grade;
        }

        function hasDiploma() {
          if($this->grade >= 9.5){
            return "has diploma.";
        }
          return "has not diploma.";
        }
      }
      $student1 = new Student("Gerard", "Business", 8.0);
      $student2 = new Student("Bahar", "Art", 7.0);
      $student3 = new Student("Mert", "Math", 9.5);

      echo $student1->hasDiploma();
      echo $student3->hasDiploma();

    ?>
  </body>
</html>