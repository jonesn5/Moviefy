<?php include('server.php') ?>
<html>
<head>
  <title>Register For Moviefy</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


  <div class="justify-content-center">
    <h2>Register</h2>

    <form method="post" action="register.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password1">
      </div>
      <div class="input-group">
        <label>Confirm password</label>
        <input type="password" name="password2">
      </div>
      <div class="input-group"> 
        <button type="submit" class="btn btn-primary" name="newUser">Register</button>
      </div>
      <p>
        Already a member? <a href="login.php">Sign in</a>
      </p>
    </form>
  </div>

  
</body>
</html>