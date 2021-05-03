<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

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

    <!-- Internal CSS for about-page text. -->  
    <style>
    h1 {text-align: center;
        margin: 1em;
    }
    p {margin: 25px 50px;
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
        <a class="nav-link" href="faqs.php">FAQs</a>
      </li>
      <li class="nav-item">
        <!-- Search bar -->
        <form class="form-inline" method="post" action="../Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>
    
    <!-- sign in button -->
    <a href="../index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
  </div>
</nav>

  

    <div>
    <h1> About Moviefy </h1>
    <p> Moviefy is the premier movie catalog of the web. The site was founded by five students at Miami University (OH) who have a passion for film. Today, the site boasts a catalog of over a million movies and a community of more than a hundred thousand. This speaks for itself. </p>
    <p> Since the site's inception, we sought to not only establish a state-of-the-art online movie catalog but also an inclusive community where people from all over the world can come together under one shared passion. From our massive movie catalog and user base to our inuitive user interface and long anticipated newly introduced dark mode, our commitment to our user's experience is absolute. </p>
    <p> If you have any questions or suggestions, you can reach our support staff at support@moviefy.com. They would be more than glad to help! </p>
    <p> Enjoy your next movie! </p>
    <p> Moviefy's Founders </p>
    </div>

</body>

</html>
