
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Task</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
</style>
<body>

<div class="container" style="margin-left: 25%;margin-right: 25%">
  <div> <h1 style="color:#e83e8c;">Login<h1></div> 
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Your role
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Student</a></li>
    <li><a href="#">Startup</a></li>
    <li><a href="#">innvator</a></li>
  </ul>
</div>
<br>
  <form action="logincode.php" method="post" enctype="multipart/form-data">
    <div class="row">
    <div class="form-group col-md-6">
      <label for="text">Email Id</label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="text">Password</label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
    </div>
  </div>
  <div class="row">
    <div  class="form-group col-md-4" style="">
      <input type="submit" class="form-control btn btn-primary" name="login" value="Login">
    </div>
  </div>
  <div>
      Not Register?<a href="index.php">SignUp </a>
  </div>
  </form>
</div>
</body>
</html>
