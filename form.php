<!DOCTYPE html>

<html>
<head>
  <title>Example PHP Form</title>
  >
                <link href = "css/bootstrap.css" rel = "stylesheet">
</head>

<body role="document">

<div class="container theme-showcase" role="main">

  <div class="jumbotron">
  <h1>My Example Form!</h1>
  <form role="form" action="formsubmit.php" method="GET">
    <div class="form-group">
      <label for="email">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pass">Password</label>
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
  </div>


</div>

</body>

</html>