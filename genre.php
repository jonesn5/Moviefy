
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="Images/moviefyIcon.png"> <!-- Go to root folder before finding img -->
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

  <script>
    //Dark mode 
    $(document).ready(function () {
      $("#buttonToggleColors").click(function () {
        $('.navbar').toggleClass("navbar-light navbar-dark");
        $('.navbar').toggleClass("bg-light bg-dark");
      });/php/project.png
    });
  </script>

    <!-- Internal CSS for page. -->
    <style>
        body {
            padding: 10px;
        }
        .wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 5fr));
            grid-gap: 5px;
        }
        img {
            width: 100%;
            border-radius: 25px;
        }
        .box {
            padding: 10px;
        }
    </style>

</head>

<body>


<!-- Boostrap navigation bar -->
<nav class="navbar navbar-expand-md bg-light navbar-light">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">Moviefy</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- margin keeps login and search on right -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="genre.php">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <!-- Search bar -->
        <form class="form-inline" method="post" action="../Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>

    <!-- Toggle dark mode -->
    <button id="buttonToggleColors" class="btn btn-primary">Dark Mode</button>
    
    <!-- sign in button -->
    <a href="../index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
  </div>
</nav>
  

<div class="wrapper">
    <div class="box"><a href = ""><img src="Genres/Action.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Comedy.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Drama.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Horror.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Romance.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Sci-Fi.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Children.png"></a></div>
    <div class="box"><a href = ""><img src="Genres/Documentary.png"></a></div>
</div>

</body>

</html>
