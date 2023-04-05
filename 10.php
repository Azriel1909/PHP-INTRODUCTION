<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="10.php" method="post">
    Password: <input type="password" name="password"> <br>
    <input type="submit">
  </form>
  <br>
  <?php 
  // POST Vs. GET
  // ! > The information is something that should not be stored up there inside the URL !!
  // ? We have to use the post method to pass information more securely. 
  echo $_POST["password"];
  // ? With the Get Method anyone can see the information.
  ?>
</body>
</html>
 