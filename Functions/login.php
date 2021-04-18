<?php include('server.php') ?>
<html>
<head>
  <title>Login To Moviefy</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

  <div class="justify-content-center">
    <h2>Login</h2>

    <form method="post" action="login.php" class="form-container">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" >
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" class="btn btn-primary" name="loginUser">Login</button>
      </div>
      <p>
        Don't have an account? <a href="register.php">Sign up</a>
      </p>
    </form>
  </div>

  
</body>
</html>