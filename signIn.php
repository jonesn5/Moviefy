<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">


  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="Images/moviefyIcon.png">

</head>

<body style="background-color: #14171A">

  <div class="d-flex justify-content-center align-items-center" style="height:500px;">
    <div class="container">
      <div class="row">
        <div class="col-sm rounded text-black bg-light p-5">
         <form action="login.inc.php" method="POST">
          <div class="form-group">
            <label for="user">Username</label>
            <input type="text" class="form-control" id="user" placeholder="Username" name="user">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="pass" placeholder="Password" name="pass">
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
      </div>
    </div>  
  </div>



</body>
</html>