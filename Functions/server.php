<?php
//Code to connect to MySQL server
session_start();

$username = "";
$email    = "";
$errors = array(); 

/*
  This databse changes if not locally hosted 
*/
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'database1'); //"database1" is the name of my local database 

// Register a new user
if (isset($_POST['newUser'])) {
  // takes input values and stops SQL injection 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password1 = mysqli_real_escape_string($db, $_POST['password1']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // Validate form 
  if (empty($username)) { array_push($errors, "A username is required"); }
  if (empty($email)) { array_push($errors, "An email is required"); }
  if (empty($password1)) { array_push($errors, "A password is required"); }
  if ($password1 != $password2) {
	array_push($errors, "The two entered passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  //If the user exists
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email address already exists");
    }
  }

  // If no errors register the user
  if (count($errors) == 0) {
    //Using md5 password hashing (Not a strong encryption)
  	$password = md5($password1);
  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Succesfully logged in";
  	header('location: ../index.php');
  }
}


// User login
if (isset($_POST['loginUser'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "A username is required");
  }
  if (empty($password)) {
    array_push($errors, "A password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $logged_in_user = mysqli_fetch_assoc($results);

      if ($logged_in_user['Admin']) {
        $_SESSION['username'] = $username;
        $_SESSION['success']  = "You are now logged in";
        header('location: ../admin.php');     
      }else{
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: ../index.php');
      }
    }else {
      array_push($errors, "Username or password does not exist");
    }
  }
}

//Movie search
if (isset($_POST['search'])) {
  
  $search = $_POST['search'];
  $sql = "SELECT * FROM movies WHERE movie LIKE '%$search%' OR director LIKE '%$search%' OR genre LIKE '%$search%'";
  $result = $db->query($sql);

  if ($result->num_rows > 0){
    while($row = $result->fetch_assoc() ){
      echo ' <a href="../Movies/' . $row["pageID"] . '.php"><h1>'. $row["movie"]."  ".$row["director"]."<br></h1>".'</a> ';
    }
  } else {
    echo "0 records";
  }
}

//Movie suggest
if (isset($_POST['suggest'])) {
  
  $suggest = $_POST['suggest'];
  $sql = "INSERT INTO suggestions VALUES ('$suggest');"; 
  $result = $db->query($sql);

  echo 'Movie suggested';
}


?>

