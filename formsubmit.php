<!DOCTYPE html>

<html>
<head>
  <title>Example PHP Submit Form</title>
  <link href = "css/bootstrap.css" rel = "stylesheet">
</head>

<body role="document">

<div class="container theme-showcase" role="main">

  <div class="jumbotron">
  <h1>You submitted:</h1>
  
  <?php

      $email = $_GET['email'];
      $pass = $_GET['pass'];

      echo "<h3>$email</h3>";
      echo "<h3>$pass</h3>";

  ?>

  </div>


</div>

</body>

</html>