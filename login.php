<?php include('server.php') ?>
<html>
<head>
  <title>Login To Moviefy</title>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
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
  		<button type="submit" class="btn" name="loginUser">Login</button>
  	</div>
  	<p>
  		Don't have an account? <a href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>