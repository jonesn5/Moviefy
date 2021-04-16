<?php 
  //Checks if user is logged in
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: Functions/login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: Functions/login.php");
  }
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Icon library for rating system -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- External CSS -->
  <link rel="stylesheet" href="style.css">

  <title>Moviefy</title>
  <!-- Website favicon -->
  <link rel="shortcut icon" href="Images/moviefyIcon.png">

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
        $('.album').toggleClass("bg-white bg-dark");
        $('.navbar').toggleClass("navbar-light navbar-dark");
        $('.navbar').toggleClass("bg-light bg-dark");
      });
    });
  </script>

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
        <a class="nav-link" href="#">Genre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <!-- Search bar -->
        <form class="form-inline" method="post" action="Functions/search.php">
          <input class="form-control " type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit" >Search</button>
        </form>
      </li>
    </ul>

    <!-- Toggle dark mode -->
    <button id="buttonToggleColors" class="btn btn-primary">Dark Mode</button>
    
    <!-- sign in button -->
    <a href="index.php?logout='1'"> <button class="btn btn-outline-success" type="submit">Logout</button> </a>
    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
  </div>
</nav>
    
</div>

  <!-- Boostrap album filled with cards -->
  <div class="album py-5 bg-white">
    <div class="container">

      <!-- First row movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://lumiere-a.akamaihd.net/v1/images/p_blackwidow_19075_0fd5159b.jpeg?region=0%2C0%2C540%2C810"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">In Marvel Studios’ action-packed spy thriller “Black Widow,” Natasha
                Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties
                to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal
                with her history as a spy and the broken relationships left in her wake long before she became an
                Avenger.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/blackwidow-2020.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 13m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-doolittke-1576597612.jpg?crop=0.8293075684380031xw:1xh;center,top&resize=480:*"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Dr. John Dolittle has the world in his hands: A beautiful wife at his side, two
                adorable daughters and a career that could not go better. One night, he nearly runs over a dog with his
                car. The dog yells "bonehead" and disappears. From then on, his childhood ability is back: To
                communicate with animals.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="Movies/dolittle-2020.php"> <button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 41m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Us is a 2019 American horror film written and directed by Jordan Peele, starring
                Lupita Nyong'o, Winston Duke, Elisabeth Moss, and Tim Heidecker. The film follows Adelaide Wilson
                (Nyong'o) and her family, who are attacked by a group of menacing doppelgängers.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Link to movie -->
                  <a href="Movies/us-2019.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 1m</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Second row of movies -->
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]" style="height: 440px; width: 100%; display: block;"
              src="https://lumiere-a.akamaihd.net/v1/images/p_blackwidow_19075_0fd5159b.jpeg?region=0%2C0%2C540%2C810"
              data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text" name="test">In Marvel Studios’ action-packed spy thriller “Black Widow,” Natasha
                Romanoff aka Black Widow confronts the darker parts of her ledger when a dangerous conspiracy with ties
                to her past arises. Pursued by a force that will stop at nothing to bring her down, Natasha must deal
                with her history as a spy and the broken relationships left in her wake long before she became an
                Avenger.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 13m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kids-movies-2020-doolittke-1576597612.jpg?crop=0.8293075684380031xw:1xh;center,top&resize=480:*"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Dr. John Dolittle has the world in his hands: A beautiful wife at his side, two
                adorable daughters and a career that could not go better. One night, he nearly runs over a dog with his
                car. The dog yells "bonehead" and disappears. From then on, his childhood ability is back: To
                communicate with animals.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">1h 41m</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow border-primary">
            <img class="card-img-top"
              data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
              alt="Thumbnail [100%x225]"
              src="https://m.media-amazon.com/images/M/MV5BZTliNWJhM2YtNDc1MC00YTk1LWE2MGYtZmE4M2Y5ODdlNzQzXkEyXkFqcGdeQXVyMzY0MTE3NzU@._V1_.jpg"
              data-holder-rendered="true" style="height: 440px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Us is a 2019 American horror film written and directed by Jordan Peele, starring
                Lupita Nyong'o, Winston Duke, Elisabeth Moss, and Tim Heidecker. The film follows Adelaide Wilson
                (Nyong'o) and her family, who are attacked by a group of menacing doppelgängers.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="Movies/us-2019.php"><button type="button"
                      class="btn btn-sm btn-outline-secondary">View</button> </a>
                </div>
                <div class="rating">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                </div>
                <small class="text-muted">2h 1m</small>
              </div>
            </div>
          </div>
        </div>

</body>

</html>
